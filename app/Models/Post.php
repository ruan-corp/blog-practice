<?php

namespace App\Models;

use App\Events\PostSaving;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["title", "category_id", "published_at", "content"];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    protected $dispatchesEvents = [
        "saving" => PostSaving::class,
    ];

    protected function getPublishedAtAttribute(string | null $value): string | null
    {
        return $value ? Carbon::parse($value)->format('d/m/y H:i') : null;
    }
}
