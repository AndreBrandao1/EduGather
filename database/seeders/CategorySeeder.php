<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([['cat_title' => 'Development', 'cat_description' => '', 'cat_logo' => ''],

            ['cat_title' => 'Business', 'cat_description' => '', 'cat_logo' => ''],

            ['cat_title' => 'IT', 'cat_description' => '', 'cat_logo' => ''],

            ['cat_title' => 'Marketing', 'cat_description' => '', 'cat_logo' => ''],

            ['cat_title' => 'Design', 'cat_description' => '', 'cat_logo' => '']


        ]);
    }
}
