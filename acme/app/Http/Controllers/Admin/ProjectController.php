<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['zone', 'customer', 'architect'])->get();
        return view('admin.projects', ['projects' => $projects]);
    }
}