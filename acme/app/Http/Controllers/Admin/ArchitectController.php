<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Architect;

class ArchitectController extends Controller
{
    public function index()
    {
        $architects = Architect::all();
        return view('admin.architects', ['architects' => $architects]);
    }
}