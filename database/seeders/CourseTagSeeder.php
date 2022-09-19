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
            ['course_id' => 1, 'tag_id' => 1],
            ['course_id' => 1, 'tag_id' => 2],
            ['course_id' => 1, 'tag_id' => 3],
            ['course_id' => 1, 'tag_id' => 4],
            ['course_id' => 2, 'tag_id' => 3],
            ['course_id' => 2, 'tag_id' => 6],
            ['course_id' => 2, 'tag_id' => 7]
        ]);
    }
}
