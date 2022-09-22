<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{

    protected $fillable = [
        'course_id',
        'user_id',
    ];

    protected $table = 'users_favorites';
    use HasFactory;
}
