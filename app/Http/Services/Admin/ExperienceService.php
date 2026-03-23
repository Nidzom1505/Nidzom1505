<?php

namespace App\Http\Services\Admin;

use App\Models\Experience;

class ExperienceService
{
    public function getAllExperiences()
    {
        return Experience::orderBy('urutan', 'asc')->orderBy('created_at', 'desc')->get();
    }

    public function storeExperience(array $data)
    {
        return Experience::create($data);
    }

    public function updateExperience(Experience $experience, array $data)
    {
        return $experience->update($data);
    }

    public function deleteExperience(Experience $experience)
    {
        return $experience->delete();
    }
}