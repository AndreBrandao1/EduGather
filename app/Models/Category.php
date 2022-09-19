<?php

namespace App\Models;

use App\Models\Tag;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    /**
     * Get the tags for the category.
     */
    public function category_tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
