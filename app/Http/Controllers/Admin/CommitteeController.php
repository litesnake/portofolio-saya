<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function index()
    {
        $committees = Committee::orderBy('order')->get();
        return view('admin.committees.index', compact('committees'));
    }

    public function create()
    {
        return view('admin.committees.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'year' => 'required',
            'role' => 'required',
            'event' => 'required',
            'order' => 'nullable|integer'
        ]);

        Committee::create($validated);

        return redirect()->route('admin.committees.index')->with('success', 'Committee berhasil ditambahkan!');
    }

    public function edit(Committee $committee)
    {
        return view('admin.committees.edit', compact('committee'));
    }

    public function update(Request $request, Committee $committee)
    {
        $validated = $request->validate([
            'year' => 'required',
            'role' => 'required',
            'event' => 'required',
            'order' => 'nullable|integer'
        ]);

        $committee->update($validated);

        return redirect()->route('admin.committees.index')->with('success', 'Committee berhasil diupdate!');
    }

    public function destroy(Committee $committee)
    {
        $committee->delete();
        return redirect()->route('admin.committees.index')->with('success', 'Committee berhasil dihapus!');
    }
}
