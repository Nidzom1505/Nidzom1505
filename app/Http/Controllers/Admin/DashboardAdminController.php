<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $total_project = Project::count();
        $projects = Project::latest()->take(5)->get();
        $skill = Skill::count();
        $pengalaman = Experience::count();
        $lokasi = Profile::value('lokasi');

        return view('pages.admin.dashboard', compact('total_project', 'lokasi', 'skill', 'pengalaman', 'projects'));
    }
}
