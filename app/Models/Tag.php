<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    /**
     * Get the tags for the category.
     */
    public function category_tag()
    {
        return $this->belongsToMany(Category::class);
    }
}
