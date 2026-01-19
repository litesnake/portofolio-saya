<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Organization;
use App\Models\Committee;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'organizations' => Organization::count(),
            'committees' => Committee::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
