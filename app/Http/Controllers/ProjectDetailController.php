<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectDetailController extends Controller
{
    public function index(Project $project): View
    {
        return view('pages.detailProjectPage', compact('project'));
    }
}
