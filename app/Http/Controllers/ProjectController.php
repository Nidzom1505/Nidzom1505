<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->has('search')) {
            $query->where('nama_project', 'ilike', '%' . $request->search . '%');
        }

        if ($request->has('filter') && $request->filter != '') {
            $query->where('jenis', $request->filter);
        }

        $projects = $query->orderBy('tahun', 'desc')->get();
        $categories = Project::select('jenis')->distinct()->pluck('jenis');

        return view('pages.projectsPage', compact('projects', 'categories'));
    }
}
