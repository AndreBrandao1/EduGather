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
        DB::table('categories')->insert([
            ['cat_title' => '', 'cat_description' => '', 'cat_logo' => ''],
            ['cat_title' => 'managment', 'cat_description' => 'a nice filled category', 'cat_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['cat_title' => 'financce', 'cat_description' => 'a nice filled category', 'cat_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['cat_title' => 'cat1', 'cat_description' => 'a nice filled category', 'cat_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['cat_title' => 'cat2', 'cat_description' => 'a nice filled category', 'cat_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['cat_title' => 'cat3', 'cat_description' => 'a nice filled category', 'cat_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['cat_title' => 'cat4', 'cat_description' => 'a nice filled category', 'cat_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png']

        ]);
    }
}
