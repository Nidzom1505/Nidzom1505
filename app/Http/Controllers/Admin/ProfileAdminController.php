<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\ProfileService;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileAdminController
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function edit()
    {
        $profile = Profile::first();
        return view('pages.admin.profileEdit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);

        $validated = $request->validate([
            'nickname'         => 'required|string|max:255',
            'headline'         => 'required|string',
            'biografi_pendek'  => 'required',
            'biografi_lengkap' => 'required',
            'lokasi'           => 'required',
            'is_available'     => 'nullable', // Kita handle manual di service
            'foto_profil'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'resume_link'      => 'nullable|mimes:pdf|max:5120',
        ]);

        $this->profileService->updateProfile($profile, $validated);

        return back()->with('success', 'Profile updated successfully!');
    }
}
