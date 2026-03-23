<?php

namespace App\Http\Services\Admin;

use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileService
{
    public function updateProfile(Profile $profile, array $data): bool
    {
        // Handle Foto Profil
        if (isset($data['foto_profil'])) {
            if ($profile->foto_profil) {
                Storage::disk('public')->delete($profile->foto_profil);
            }
            $data['foto_profil'] = $data['foto_profil']->store('profile', 'public');
        }

        // Handle Resume/PDF
        if (isset($data['resume_link'])) {
            if ($profile->resume_link) {
                Storage::disk('public')->delete($profile->resume_link);
            }
            $data['resume_link'] = $data['resume_link']->store('docs', 'public');
        }

        // Paksa is_available jadi boolean (karena checkbox sering tidak terkirim jika off)
        $data['is_available'] = (bool) ($data['is_available'] ?? false);

        return $profile->update($data);
    }
}
