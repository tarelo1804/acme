<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'img',
        'content',
        'likes',
        'slug',
        'user_id',
        'category_id',
    ];
}
