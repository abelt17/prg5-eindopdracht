<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tactic extends Model
{
    protected $fillable = [
        'tactic_name',
        'line_up',
        'pression',
        'style',
        'pace',
        'description',
    ];

}
