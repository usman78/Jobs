<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewJobController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [ViewJobController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('summary-dashboard', [ViewJobController::class, 'summaryDashboard'])->middleware(['auth', 'verified'])->name('summary.dashboard');
Route::get('/profile/{id}', [ViewJobController::class, 'show'])->middleware(['auth', 'verified'])->name('profile');
Route::post('/change-status/{app_no}', [ViewJobController::class, 'changeStatus'])->middleware(['auth', 'verified'])->name('change.status');
Route::get('/shortlisted', [ViewJobController::class, 'shortlisted'])->middleware(['auth', 'verified'])->name('shortlisted');
Route::get('/designation-jobs/{position}', [ViewJobController::class, 'designationJobs'])->middleware(['auth', 'verified'])->name('designation.jobs');

Route::get('/debug', [ViewJobController::class, 'debug']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
