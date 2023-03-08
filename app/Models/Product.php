<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'keywords',
        'category_id',
        'slug'
    ];


    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ['name' => $value, 'slug' => Str::slug($value)]
        );
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
