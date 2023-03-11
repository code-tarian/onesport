<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact',
        'logo',
        'address',
        'description',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
