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
            ['course_id' => 1, 'language_id' => 3],
            ['course_id' => 1, 'language_id' => 4],
            ['course_id' => 2, 'language_id' => 1],
            ['course_id' => 2, 'language_id' => 3],
            ['course_id' => 2, 'language_id' => 4]
        ]);
    }
}
