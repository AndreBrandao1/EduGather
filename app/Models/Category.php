<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Course;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cat_title',
        'cat_description',
        'cat_logo',
    ];

    /**
     * Get the tags for the category.
     */
    public function category_tag()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the courses for the category.
     */
    public function category_cours()
    {
        return $this->belongsToMany(Course::class);
    }


}
