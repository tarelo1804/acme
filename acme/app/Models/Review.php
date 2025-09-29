<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'drawing_id',
        'architect_id',
        'comment',
        'review_date'
    ];

    public function drawing()
    {
        return $this->belongsTo(ArchitecturalDrawing::class);
    }

    public function architect()
    {
        return $this->belongsTo(Architect::class);
    }
}