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
        DB::table('tags')->insert([
            ['tag_title' => 'tag1', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['tag_title' => 'tag2', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['tag_title' => 'tag3', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['tag_title' => 'tag4', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['tag_title' => 'tag5', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['tag_title' => 'tag6', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['tag_title' => 'tag7', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['tag_title' => 'tag8', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['tag_title' => 'tag9', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['tag_title' => 'tag10', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png'],
            ['tag_title' => 'tag11', 'tag_description' => 'cool to learn', 'tag_logo' => 'https://cdn.pixabay.com/photo/2013/07/13/01/17/spider-155449_960_720.png']

        ]);
    }
}
