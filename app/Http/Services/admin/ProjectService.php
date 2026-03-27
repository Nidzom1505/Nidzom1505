<?php

namespace App\Http\Services\Admin;

use App\Models\Project;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProjectService
{
    public function getAllProjects()
    {
        return Project::latest()->paginate(10);
    }

    public function upsertProject(array $data, ?Project $project = null)
    {
        $token = env('BLOB_READ_WRITE_TOKEN');
        $data['slug'] = Str::slug($data['nama_project']);

        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            if ($project && $project->image) {
                $this->deleteFromVercelBlob($project->image, $token);
            }

            $file = $data['image'];
            $pathname = 'projects/thumbnails/' . Str::slug($data['nama_project']) . '-' . time() . '.' . $file->getClientOriginalExtension();

            $url = $this->putToVercelBlob($file, $pathname, $token);

            if ($url) {
                $data['image'] = $url;
            } else {
                unset($data['image']);
            }
        }

        if (isset($data['new_screenshots'])) {
            $screenshots = ($project && is_array($project->screenshots)) ? $project->screenshots : [];

            foreach ($data['new_screenshots'] as $file) {
                $pathname = 'projects/screenshots/' . Str::slug($data['nama_project']) . '-' . Str::random(5) . '-' . time() . '.' . $file->getClientOriginalExtension();

                $url = $this->putToVercelBlob($file, $pathname, $token);

                if ($url) {
                    $screenshots[] = $url;
                }
            }
            $data['screenshots'] = $screenshots;
            unset($data['new_screenshots']);
        }

        if ($project) {
            $project->update($data);
            return $project;
        }

        return Project::create($data);
    }

    public function deleteProject(Project $project)
    {
        $token = env('VERCEL_BLOB_READ_WRITE_TOKEN');

        if ($project->image) {
            $this->deleteFromVercelBlob($project->image, $token);
        }

        if ($project->screenshots && is_array($project->screenshots)) {
            foreach ($project->screenshots as $shot) {
                $this->deleteFromVercelBlob($shot, $token);
            }
        }

        return $project->delete();
    }

    private function putToVercelBlob($file, $pathname, $token)
    {
        $apiUrl = "https://blob.vercel-storage.com/" . $pathname . "?access=public";

        try {
            $stream = fopen($file->getRealPath(), 'r');
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . trim($token),
                'x-api-version' => '7',
            ])
                ->withBody($stream, $file->getMimeType())
                ->put($apiUrl);

            if ($response->successful()) {
                return $response->json()['url'];
            }

            Log::error('Vercel Project Upload Error: ' . $response->status(), ['body' => $response->body()]);
        } catch (\Exception $e) {
            Log::error('Gagal Upload Project ke Vercel: ' . $e->getMessage());
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
            Http::withHeaders([
                'Authorization' => 'Bearer ' . trim($token),
                'x-api-version' => '7',
            ])->post('https://blob.vercel-storage.com/delete', [
                'urls' => [$url]
            ]);
        } catch (\Exception $e) {
            Log::error('Gagal hapus file project di Vercel: ' . $e->getMessage());
        }
    }
}
