<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class CategoryTag extends Model
{

    protected $fillable = [
        'category_id',
        'tag_id',
    ];


    protected $table = 'category_tag';
    use HasFactory;
}
