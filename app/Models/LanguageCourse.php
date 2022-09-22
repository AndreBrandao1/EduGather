<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageCourse extends Model
{
    protected $fillable = [
        'language_id',
        'course_id',
    ];

    protected $table = 'language_course';
    use HasFactory;
}
