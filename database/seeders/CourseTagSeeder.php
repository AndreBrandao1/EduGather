<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CourseTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_tag')->insert([
            ['course_id' => 1, 'tag_id' => 1],['course_id' => 1, 'tag_id' => 2], ['course_id' => 1, 'tag_id' => 3], ['course_id' => 2, 'tag_id' => 2],
            ['course_id' => 2, 'tag_id' => 1],
            ['course_id' => 2, 'tag_id' => 4],
            ['course_id' => 3, 'tag_id' => 3],
            ['course_id' => 3, 'tag_id' => 2],
            ['course_id' => 4, 'tag_id' => 1],
            ['course_id' => 4, 'tag_id' => 2],
            ['course_id' => 4, 'tag_id' => 4],
            ['course_id' => 5, 'tag_id' => 5],
            ['course_id' => 5, 'tag_id' => 6],
            ['course_id' => 6, 'tag_id' => 6],
            ['course_id' => 6, 'tag_id' => 7],
            ['course_id' => 7, 'tag_id' => 8],
            ['course_id' => 7, 'tag_id' => 7],
            ['course_id' => 8, 'tag_id' => 8],
            ['course_id' => 8, 'tag_id' => 7],
            ['course_id' => 8, 'tag_id' => 5],
            ['course_id' => 9, 'tag_id' => 9],
            ['course_id' => 9, 'tag_id' => 10],
            ['course_id' => 10, 'tag_id' => 10],
            ['course_id' => 11, 'tag_id' => 12],
            ['course_id' => 11, 'tag_id' => 13],
            ['course_id' => 11, 'tag_id' => 14],
            ['course_id' => 12, 'tag_id' => 13],
            ['course_id' => 12, 'tag_id' => 14],
            ['course_id' => 13, 'tag_id' => 14],
            ['course_id' => 13, 'tag_id' => 11],
            ['course_id' => 14, 'tag_id' => 15],
            ['course_id' => 14, 'tag_id' => 16],
            ['course_id' => 15, 'tag_id' => 16],
            ['course_id' => 15, 'tag_id' => 17],
            

        ]);
    }
}
