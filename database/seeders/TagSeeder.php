<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([['tag_title' => 'Web Development', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'Data Scince', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'Mobile Development', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'Programing Languages', 'tag_description' => ' ', 'tag_logo' => ''],

            ['tag_title' => 'Communication', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'Management', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'Sales', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'Business Strategy', 'tag_description' => ' ', 'tag_logo' => ''],

            ['tag_title' => 'Network & Security', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'Hardware', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'OS', 'tag_description' => 'Operation Systems', 'tag_logo' => ''],

            ['tag_title' => 'Digital Marketing', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'SEO', 'tag_description' => 'Search Engine Optimization', 'tag_logo' => ''],
            ['tag_title' => 'Branding', 'tag_description' => '', 'tag_logo' => ''],

            ['tag_title' => 'Web Design', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'Graphic Design', 'tag_description' => ' ', 'tag_logo' => ''],
            ['tag_title' => 'Game Design', 'tag_description' => ' ', 'tag_logo' => ''],


        ]);
    }
}
