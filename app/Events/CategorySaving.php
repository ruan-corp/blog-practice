<?php

namespace App\Events;

use App\Models\Category;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CategorySaving
{
    use Dispatchable, SerializesModels;

    public Category $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
}
