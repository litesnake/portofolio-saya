<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::first();

        // Jika belum ada profile, buat default
        if (!$profile) {
            $profile = Profile::create([
                'name' => 'Nama Anda',
                'title' => 'Web Developer & Tech Enthusiast',
                'bio' => 'Saya adalah pengembang web...',
                'email' => 'email@contoh.com',
                'linkedin' => '',
                'github' => '',
                'instagram' => ''
            ]);
        }

        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'bio' => 'required',
            'email' => 'required|email',
            'linkedin' => 'nullable|url',
            'github' => 'nullable|url',
            'instagram' => 'nullable|url'
        ]);

        $profile = Profile::first();
        $profile->update($validated);

        return redirect()->route('admin.profile.edit')->with('success', 'Profile berhasil diupdate!');
    }
}
