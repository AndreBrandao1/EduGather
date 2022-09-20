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
}
