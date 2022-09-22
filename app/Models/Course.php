<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        "cou_title",
        "cou_description",
        "cou_logo",
        "user_id",
        "cat_id",
        "cou_statue"
    ];

    public function course_user()
    {
        return $this->hasMany(User::class);
    }

    public function course_tag()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function course_language()
    {
        return $this->belongsToMany(Language::class);
    }
}
