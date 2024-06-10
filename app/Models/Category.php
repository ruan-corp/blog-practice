<?php

namespace App\Models;

use App\Events\CategorySaving;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    protected $dispatchesEvents = [
        'saving' => CategorySaving::class,
    ];
}
