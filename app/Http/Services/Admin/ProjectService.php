<?php

namespace App\Http\Services\Admin;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectService
{
    public function getAllProjects()
    {
        return Project::latest()->paginate(10);
    }

    public function upsertProject(array $data, ?Project $project = null)
    {
        $data['slug'] = Str::slug($data['nama_project']);

        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            if ($project && $project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $data['image']->store('projects/thumbnails', 'public');
        }

        if (isset($data['new_screenshots'])) {
            $screenshots = $project ? ($project->screenshots ?? []) : [];
            foreach ($data['new_screenshots'] as $file) {
                $screenshots[] = $file->store('projects/screenshots', 'public');
            }
            $data['screenshots'] = $screenshots;
        }

        if ($project) {
            $project->update($data);
            return $project;
        }

        return Project::create($data);
    }

    public function deleteProject(Project $project)
    {
        if ($project->image) Storage::disk('public')->delete($project->image);
        if ($project->screenshots) {
            foreach ($project->screenshots as $shot) {
                Storage::disk('public')->delete($shot);
            }
        }
        return $project->delete();
    }
}
