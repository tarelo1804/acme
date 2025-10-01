<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Redirección desde /dashboard a /admin/dashboard
Route::get('/dashboard', function () {
    return redirect('/admin/dashboard');
});

// Rutas de administración
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Usuarios
    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');

    // Arquitectos
    Route::get('architects', [App\Http\Controllers\Admin\ArchitectController::class, 'index'])->name('architects.index');

    // Clientes
    Route::get('customers', [App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('customers.index');

    // Proyectos
    Route::get('projects', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('projects.index');

    // Planos Arquitectónicos
    Route::controller(App\Http\Controllers\Admin\DrawingController::class)->group(function () {
        Route::get('drawings', 'index')->name('drawings.index');
        Route::post('drawings', 'store')->name('drawings.store');
        Route::delete('drawings/{drawing}', 'destroy')->name('drawings.destroy');
        Route::get('drawings/{drawing}/view', 'show')->name('drawings.show');
        Route::get('drawings/{drawing}/download', 'download')->name('drawings.download');
    });

    // Revisiones
    Route::get('reviews', [App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('reviews.index');

    // Zonas
    Route::get('zones', [App\Http\Controllers\Admin\ZoneController::class, 'index'])->name('zones.index');
});

// Ruta de logout
Route::post('/logout', function() {
    Auth::logout();
    return redirect('/');
})->name('logout');
