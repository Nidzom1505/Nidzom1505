<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\ProjectService;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    public function index()
    {
        $projects = $this->projectService->getAllProjects();
        $skills = Skill::orderBy('category')->orderBy('name')->get();

        return view('pages.admin.projects', compact('projects', 'skills'));
    }

    public function store(Request $request)
    {
        $data = $this->validateRequest($request);
        $this->projectService->upsertProject($data);

        return back()->with('success', 'Project created successfully!');
    }

    public function update(Request $request, Project $project)
    {
        $data = $this->validateRequest($request, $project->id);
        $this->projectService->upsertProject($data, $project);

        return back()->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        $this->projectService->deleteProject($project);
        return back()->with('success', 'Project deleted successfully!');
    }

    protected function validateRequest(Request $request, $id = null)
    {
        return $request->validate([
            'nama_project' => 'required|string|max:255',
            'deskripsi' => 'required',
            'jenis' => 'required',
            'tahun' => 'required|integer',
            'image' => $id ? 'nullable|image|max:2048' : 'nullable|image|max:2048',
            'tech_stack' => 'nullable|array',
            'link_github' => 'nullable|url',
            'link_project' => 'nullable|url',
            'new_screenshots.*' => 'nullable|image|max:2048',
            'kontribusi' => 'nullable|string',
            'konteks' => 'nullable|string',
            'tantangan' => 'nullable|string',
            'solusi' => 'nullable|string',
        ]);
    }
}
