<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchitecturalDrawing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file_path',
        'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}