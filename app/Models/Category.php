<?php

namespace App\Models;

use App\Events\CategorySaving;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    protected $dispatchesEvents = [
        'saving' => CategorySaving::class,
    ];

    // protected static function booted()
    // {
    //     static::saving(function (Category $category) {
    //         $category->slug = Str::slug($category->name);
    //     });
    // }
}
