<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'code_link' => 'nullable|url',
            'demo_link' => 'nullable|url',
            'order' => 'nullable|integer'
        ]);

        // Convert tags dari string ke array
        $validated['tags'] = array_map('trim', explode(',', $validated['tags']));

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'code_link' => 'nullable|url',
            'demo_link' => 'nullable|url',
            'order' => 'nullable|integer'
        ]);

        $validated['tags'] = array_map('trim', explode(',', $validated['tags']));

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diupdate!');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus!');
    }
}
