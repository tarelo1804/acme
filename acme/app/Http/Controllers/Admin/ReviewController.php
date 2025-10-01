<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['drawing', 'architect'])->get();
        return view('admin.reviews', ['reviews' => $reviews]);
    }
}