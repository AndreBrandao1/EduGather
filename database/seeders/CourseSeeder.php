<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([['cou_title' => 'course 1', 'cou_description' => 'Course 1 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 1, 'cat_id' => 1],
            ['cou_title' => 'course 2', 'cou_description' => 'Course 2 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 2, 'cat_id' => 1],
            ['cou_title' => 'course 3', 'cou_description' => 'Course 3 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 3, 'cat_id' => 1],
            ['cou_title' => 'course 4', 'cou_description' => 'Course 4 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 2, 'cat_id' => 1],
            ['cou_title' => 'course 5', 'cou_description' => 'Course 5 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 5, 'cat_id' => 1],
            ['cou_title' => 'course 6', 'cou_description' => 'Course 6 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 6, 'cat_id' => 1],
            ['cou_title' => 'course 7', 'cou_description' => 'Course 7 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 3, 'cat_id' => 1],
            ['cou_title' => 'course 8', 'cou_description' => 'Course 8 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 6, 'cat_id' => 1],
            ['cou_title' => 'course 9', 'cou_description' => 'Course 9 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 2, 'cat_id' => 1],
            ['cou_title' => 'course 10', 'cou_description' => 'Course 10 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 2, 'cat_id' => 1],
            ['cou_title' => 'course 11', 'cou_description' => 'Course 11 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 3, 'cat_id' => 1],
            ['cou_title' => 'course 12', 'cou_description' => 'Course 12 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 4, 'cat_id' => 1],
            ['cou_title' => 'course 13', 'cou_description' => 'Course 13 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 5, 'cat_id' => 1],
            ['cou_title' => 'course 14', 'cou_description' => 'Course 14 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 2, 'cat_id' => 1],
            ['cou_title' => 'course 15', 'cou_description' => 'Course 15 description', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'user_id' => 3, 'cat_id' => 1],


        ]);
    }
}
