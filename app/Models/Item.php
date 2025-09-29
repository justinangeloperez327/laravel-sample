<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'description',
        'reorder_level',
        'created_by',
    ];

    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function stockMovements(): HasMany
    {
        return $this->hasMany(StockMovement::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(\App\Models\Image::class, 'imageable');
    }

    public function image(): MorphMany
    {
        return $this->morphOne(\App\Models\Image::class, 'imageable')->where('is_primary', true);
    }
}
