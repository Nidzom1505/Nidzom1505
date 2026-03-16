<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\DashboardService;

class dashboardController extends Controller
{
    public function index(DashboardService $dashboardService)
    {
        $data = $dashboardService->getDashboardData();

        return view('pages.dashboard', compact('data'));
    }
}
