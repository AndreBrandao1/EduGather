<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CatTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_tags')->insert([
            ['cat_id' => 1, 'tag_id' => 1],
            ['cat_id' => 1, 'tag_id' => 3],
            ['cat_id' => 1, 'tag_id' => 4],
            ['cat_id' => 2, 'tag_id' => 5],
            ['cat_id' => 2, 'tag_id' => 3],
            ['cat_id' => 3, 'tag_id' => 7],
            ['cat_id' => 4, 'tag_id' => 8],
            ['cat_id' => 2, 'tag_id' => 9],
            ['cat_id' => 3, 'tag_id' => 10],
            ['cat_id' => 4, 'tag_id' => 3],
            ['cat_id' => 1, 'tag_id' => 2]
        ]);
    }
}
