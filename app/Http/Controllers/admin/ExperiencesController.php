<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\ExperienceService;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    protected $experienceService;

    public function __construct(ExperienceService $experienceService)
    {
        $this->experienceService = $experienceService;
    }

    public function index()
    {
        $experiences = $this->experienceService->getAllExperiences();
        
        return view('pages.admin.experiences', compact('experiences'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'posisi' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'deskripsi_tugas' => 'nullable|string',
            'urutan' => 'nullable|integer',
        ]);

        $this->experienceService->storeExperience($validated);
        return back()->with('success', 'Pengalaman berhasil ditambahkan!');
    }

    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'posisi' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'deskripsi_tugas' => 'nullable|string',
            'urutan' => 'nullable|integer',
        ]);

        $this->experienceService->updateExperience($experience, $validated);
        return back()->with('success', 'Pengalaman berhasil diperbarui!');
    }

    public function destroy(Experience $experience)
    {
        $this->experienceService->deleteExperience($experience);
        return back()->with('success', 'Pengalaman berhasil dihapus!');
    }
}
