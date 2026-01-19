<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\OrganizationController as AdminOrganizationController;
use App\Http\Controllers\Admin\CommitteeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Models\Project;
use App\Models\Organization;
use App\Models\Committee;
use App\Models\Profile;

// ===== FRONTEND ROUTES =====
Route::get('/', function () {
    $profile = Profile::first();
    return view('home', compact('profile'));
})->name('home');

Route::get('/projects', function () {
    $projects = Project::orderBy('order')->get();
    return view('projects', compact('projects'));
})->name('projects');

Route::get('/organization', function () {
    $organizations = Organization::orderBy('order')->get();
    $committees = Committee::orderBy('order')->get();
    return view('organization', compact('organizations', 'committees'));
})->name('organization');

// ===== ADMIN ROUTES =====
Route::prefix('admin')->name('admin.')->group(function () {

    // Login Routes (Tidak perlu auth)
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    // Protected Admin Routes
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        // Resource Routes
        Route::resource('projects', AdminProjectController::class);
        Route::resource('organizations', AdminOrganizationController::class);
        Route::resource('committees', CommitteeController::class);

        // Profile Routes
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    });
});
