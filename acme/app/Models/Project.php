<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'delivery_date',
        'zone_id',
        'customer_id',
        'architect_id'
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function architect()
    {
        return $this->belongsTo(Architect::class);
    }

    public function drawings()
    {
        return $this->hasMany(ArchitecturalDrawing::class);
    }
}