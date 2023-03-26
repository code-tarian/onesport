<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Field extends Model
{
    use HasFactory;

    protected $fillable = ['venue_id', 'slug', 'name', 'image', 'description', 'active'];

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }
    public function specification(): BelongsToMany
    {
        return $this->belongsToMany(Specification::class, 'field_specifications', 'field_id', 'specification_id');
    }
}
