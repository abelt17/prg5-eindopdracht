<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tactic extends Model
{
    protected $fillable = [
        'user_id',
        'tactic_name',
        'line_up',
        'pression',
        'style',
        'pace',
        'description',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
