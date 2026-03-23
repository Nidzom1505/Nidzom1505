<?php

namespace App\Http\Services\Admin;

use App\Models\Skill;

class SkillService
{
    public function getAllSkills()
    {
        return Skill::orderBy('category')->orderBy('order')->get();
    }

    public function upsertSkill(array $data, ?Skill $skill = null)
    {
        if ($skill) {
            $skill->update($data);
            return $skill;
        }

        return Skill::create($data);
    }

    public function deleteSkill(Skill $skill)
    {
        return $skill->delete();
    }
}
