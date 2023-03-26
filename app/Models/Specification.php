<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Specification extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'active'];

    public function field(): BelongsToMany
    {
        return $this->belongsToMany(Field::class, 'field_specifications', 'specification_id', 'field_id');
    }
}
