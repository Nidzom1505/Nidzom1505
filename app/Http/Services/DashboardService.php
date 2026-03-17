<?php

namespace App\Http\Services;

use App\Models\Project;

class DashboardService
{
    public function getDashboardData()
    {
        $stats = Project::selectRaw('MIN(tahun) as tahun_terlama, COUNT(*) as total_project')
            ->first();

        $tahunTerlama = $stats->tahun_terlama;
        $tahunSekarang = (int)date('Y');

        $pengalamanTahun = $tahunTerlama ? ($tahunSekarang - $tahunTerlama) : 0;

        $recentProjects = Project::latest('id')->take(2)->get();

        return [
            'pengalaman'      => $pengalamanTahun,
            'total_project'   => $stats->total_project ?? 0,
            'recent_projects' => $recentProjects,
            'tahun_mulai'     => $tahunTerlama ?? $tahunSekarang
        ];
    }
}
