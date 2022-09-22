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
    public function tag_category()
    {
        return $this->belongsToMany(Category::class);
    }


    public function tag_course()
    {
        return $this->belongsToMany(Categogry::class);
    }
}
