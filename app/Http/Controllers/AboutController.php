<?php

namespace App\Http\Controllers;

use App\Http\Services\DashboardService;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index(DashboardService $dashboardService)
    {
        $data = $dashboardService->getDashboardData();

        $profile = Profile::first();
        $tahun = $data['pengalaman'];
        $total_project = $data['total_project'];
        $tech_stack = Skill::orderBy('order', 'asc')->get()->groupBy('category');
        $experiences = Experience::orderBy('urutan', 'asc')->get();

        $expertises = [
            [
                'title' => 'Database Excellence',
                'desc' => 'Designing fast, reliable, and well-structured data schemas for high integrity.'
            ],
            [
                'title' => 'Business Logic',
                'desc' => 'Translating complex organizational needs into simple, functional digital workflows.'
            ],
            [
                'title' => 'Security First',
                'desc' => 'Protecting sensitive information by implementing modern security standards and best practices.'
            ],
            [
                'title' => 'Scalable Architecture',
                'desc' => 'Building solid foundations that handle growth while maintaining peak performance.'
            ],
        ];

        return view('pages.aboutPages', compact(
            'profile',
            'experiences',
            'total_project',
            'tech_stack',
            'tahun',
            'expertises'
        ));
    }
}
