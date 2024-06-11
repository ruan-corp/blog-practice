<?php

namespace App\Models;

use App\Events\CategorySaving;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use app\Models\Post;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    protected $dispatchesEvents = [
        'saving' => CategorySaving::class,
    ];
}
