<?php

namespace App\Http\Controllers;

use App\Http\Services\DashboardService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(DashboardService $dashboardService)
    {
        $data = $dashboardService->getDashboardData();

        return view('pages.dashboard', compact('data'));
    }
}
