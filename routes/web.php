<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/students', [AdminController::class, 'students'])->name('admin.students');
    Route::get('/students/create', [AdminController::class, 'create'])->name('admin.students.create');
    Route::post('/students', [AdminController::class, 'store'])->name('admin.students.store');
    Route::get('/students/{student}/edit', [AdminController::class, 'edit'])->name('admin.students.edit');
    Route::put('/students/{student}', [AdminController::class, 'update'])->name('admin.students.update');
    Route::delete('/students/{student}', [AdminController::class, 'destroy'])->name('admin.students.destroy');
});

// Result Routes
Route::get('/result/{roll_no}', [ResultController::class, 'show'])->name('result.show');
Route::get('/result/{roll_no}/download', [ResultController::class, 'downloadPdf'])->name('result.download');