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
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Usuarios
    Route::get('users', function () {
        $users = \App\Models\User::all();
        return view('admin.users', ['usuarios' => $users]);
    })->name('users.index');

    // Arquitectos
    Route::get('architects', function () {
        $architects = \App\Models\Architect::all();
        return view('admin.architects', ['architects' => $architects]);
    })->name('architects.index');

    // Clientes
    Route::get('customers', function () {
        $customers = \App\Models\Customer::with('user')->get();
        return view('admin.customers', ['customers' => $customers]);
    })->name('customers.index');

    // Proyectos
    Route::get('projects', function () {
        $projects = \App\Models\Project::with(['zone', 'customer', 'architect'])->get();
        return view('admin.projects', ['projects' => $projects]);
    })->name('projects.index');

    // Planos Arquitectónicos
    Route::get('drawings', function () {
        $drawings = \App\Models\ArchitecturalDrawing::with('project')->get();
        return view('admin.drawings', ['drawings' => $drawings]);
    })->name('drawings.index');

    // Revisiones
    Route::get('reviews', function () {
        $reviews = \App\Models\Review::with(['drawing', 'architect'])->get();
        return view('admin.reviews', ['reviews' => $reviews]);
    })->name('reviews.index');

    // Zonas
    Route::get('zones', function () {
        $zones = \App\Models\Zone::all();
        return view('admin.zones', ['zones' => $zones]);
    })->name('zones.index');
});

// Ruta de logout
Route::post('/logout', function() {
    Auth::logout();
    return redirect('/');
})->name('logout');
