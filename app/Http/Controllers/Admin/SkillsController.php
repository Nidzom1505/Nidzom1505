<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\SkillService;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    protected $skillService;

    public function __construct(SkillService $skillService)
    {
        $this->skillService = $skillService;
    }

    public function index()
    {
        $skills = $this->skillService->getAllSkills();
        return view('pages.admin.skills', compact('skills'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'icon_url' => 'required|url',
            'category' => 'required|string',
            'order' => 'required|integer',
        ]);

        $this->skillService->upsertSkill($data);
        return back()->with('success', 'Skill added successfully!');
    }

    public function update(Request $request, Skill $skill)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'icon_url' => 'required|url',
            'category' => 'required|string',
            'order' => 'required|integer',
        ]);

        $this->skillService->upsertSkill($data, $skill);
        return back()->with('success', 'Skill updated!');
    }

    public function destroy(Skill $skill)
    {
        $this->skillService->deleteSkill($skill);
        return back()->with('success', 'Skill deleted!');
    }
}
