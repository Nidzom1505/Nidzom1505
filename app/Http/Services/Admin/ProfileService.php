<?php

namespace App\Http\Services\Admin;

use App\Models\Profile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProfileService
{
    public function updateProfile(Profile $profile, array $data): bool
    {
        $token = env('BLOB_READ_WRITE_TOKEN');

        if (isset($data['foto_profil']) && $data['foto_profil'] instanceof \Illuminate\Http\UploadedFile) {
            $file = $data['foto_profil'];
            $pathname = 'profiles/avatar-' . Str::lower(Str::random(8)) . '.' . $file->getClientOriginalExtension();

            $url = $this->putToVercelBlob($file, $pathname, $token, 'public');

            if ($url) {
                if ($profile->foto_profil) {
                    $this->deleteFromVercelBlob($profile->foto_profil, $token);
                }
                $data['foto_profil'] = $url;
            } else {
                unset($data['foto_profil']);
            }
        }

        if (isset($data['resume_link']) && $data['resume_link'] instanceof \Illuminate\Http\UploadedFile) {
            $file = $data['resume_link'];
            $pathname = 'docs/resume-' . time() . '.pdf';

            $url = $this->putToVercelBlob($file, $pathname, $token, 'public');

            if ($url) {
                if ($profile->resume_link) {
                    $this->deleteFromVercelBlob($profile->resume_link, $token);
                }
                $data['resume_link'] = $url;
            } else {
                unset($data['resume_link']);
            }
        }

        $data['is_available'] = (bool) ($data['is_available'] ?? false);

        return $profile->update($data);
    }

    private function putToVercelBlob($file, $pathname, $token, $access = 'public')
    {
        $apiUrl = "https://blob.vercel-storage.com/" . $pathname . "?access=" . $access;

        try {
            $stream = fopen($file->getRealPath(), 'r');

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'x-api-version' => '7',
            ])
                ->withBody($stream, $file->getMimeType())
                ->put($apiUrl);

            if ($response->successful()) {
                return $response->json()['url'];
            }

            Log::error('Vercel Upload Error: ' . $response->status(), ['body' => $response->body()]);
        } catch (\Exception $e) {
            Log::error('Gagal Upload ke Vercel: ' . $e->getMessage());
        } finally {
            if (isset($stream) && is_resource($stream)) {
                fclose($stream);
            }
        }

        return null;
    }

    private function deleteFromVercelBlob($url, $token)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'x-api-version' => '7',
                'Content-Type' => 'application/json',
            ])->post('https://blob.vercel-storage.com/delete', [
                'urls' => [$url]
            ]);

            return $response->successful();
        } catch (\Exception $e) {
            Log::error('Gagal hapus file di Vercel: ' . $e->getMessage());
            return false;
        }
    }
}
