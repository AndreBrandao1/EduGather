<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language_course')->insert([
            ['course_id' => 1, 'language_id' => 1],
            ['course_id' => 1, 'language_id' => 2],
            ['course_id' => 1, 'language_id' => 3],['course_id' => 1, 'language_id' => 4], ['course_id' => 2, 'language_id' => 1], ['course_id' => 3, 'language_id' => 1],
            ['course_id' => 2, 'language_id' => 3], ['course_id' => 3, 'language_id' => 3],
            ['course_id' => 2, 'language_id' => 4],
            ['course_id' => 3, 'language_id' => 4],
            ['course_id' => 4, 'language_id' => 1],
            ['course_id' => 4, 'language_id' => 2],
            ['course_id' => 4, 'language_id' => 3],
            ['course_id' => 4, 'language_id' => 6],
            ['course_id' => 5, 'language_id' => 7],
            ['course_id' => 5, 'language_id' => 6],
            ['course_id' => 6, 'language_id' => 7],
            ['course_id' => 6, 'language_id' => 3],
            ['course_id' => 7, 'language_id' => 1],
            ['course_id' => 7, 'language_id' => 2],
            ['course_id' => 7, 'language_id' => 5],
            ['course_id' => 8, 'language_id' => 5],
            ['course_id' => 9, 'language_id' => 5],
            ['course_id' => 10, 'language_id' => 5],
            ['course_id' => 10, 'language_id' => 6],
            ['course_id' => 11, 'language_id' => 5],
            ['course_id' => 12, 'language_id' => 5],
            ['course_id' => 12, 'language_id' => 3],
            ['course_id' => 13, 'language_id' => 3],
            ['course_id' => 13, 'language_id' => 4],
            ['course_id' => 14, 'language_id' => 5],
            ['course_id' => 15, 'language_id' => 2],
            ['course_id' => 15, 'language_id' => 1],

        ]);
    }
}
