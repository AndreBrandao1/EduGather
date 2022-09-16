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
        DB::table('courses')->insert([
            ['cou_title' => 'course 1', 'cou_description' => 'something nice about me', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'trainer_id' => 1, 'cat_id' => 1], ['cou_title' => 'course 2', 'cou_description' => 'something nice about me', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'trainer_id' => 2, 'cat_id' => 3], ['cou_title' => 'course 3', 'cou_description' => 'something nice about me', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'trainer_id' => 2, 'cat_id' => 4], ['cou_title' => 'course 4', 'cou_description' => 'something nice about me', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'trainer_id' => 3, 'cat_id' => 2], ['cou_title' => 'course 5', 'cou_description' => 'something nice about me', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'trainer_id' => 4, 'cat_id' => 2], ['cou_title' => 'course 6', 'cou_description' => 'something nice about me', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'trainer_id' => 2, 'cat_id' => 1], ['cou_title' => 'course 7', 'cou_description' => 'something nice about me', 'cou_logo' => 'https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png', 'trainer_id' => 13, 'cat_id' => 2],


        ]);
    }
}
