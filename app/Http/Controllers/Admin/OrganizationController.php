<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::orderBy('order')->get();
        return view('admin.organizations.index', compact('organizations'));
    }

    public function create()
    {
        return view('admin.organizations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'year_range' => 'required',
            'position' => 'required',
            'institution' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
            'instagram_link' => 'nullable|url',
            'card_label' => 'nullable',
            'order' => 'nullable|integer'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('organizations', 'public');
        }

        Organization::create($validated);

        return redirect()->route('admin.organizations.index')->with('success', 'Organisasi berhasil ditambahkan!');
    }

    public function edit(Organization $organization)
    {
        return view('admin.organizations.edit', compact('organization'));
    }

    public function update(Request $request, Organization $organization)
    {
        $validated = $request->validate([
            'year_range' => 'required',
            'position' => 'required',
            'institution' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
            'instagram_link' => 'nullable|url',
            'card_label' => 'nullable',
            'order' => 'nullable|integer'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($organization->image) {
                Storage::disk('public')->delete($organization->image);
            }
            $validated['image'] = $request->file('image')->store('organizations', 'public');
        }

        $organization->update($validated);

        return redirect()->route('admin.organizations.index')->with('success', 'Organisasi berhasil diupdate!');
    }

    public function destroy(Organization $organization)
    {
        if ($organization->image) {
            Storage::disk('public')->delete($organization->image);
        }

        $organization->delete();
        return redirect()->route('admin.organizations.index')->with('success', 'Organisasi berhasil dihapus!');
    }
}
