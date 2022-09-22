<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTag extends Model
{

    protected $fillable = [
        'course_id',
        'tag_id',
    ];
    protected $table = 'course_tag';
    use HasFactory;
}
