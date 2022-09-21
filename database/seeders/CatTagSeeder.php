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
        DB::table('category_tag')->insert([
            ['category_id' => 1, 'tag_id' => 1],
            ['category_id' => 1, 'tag_id' => 3],
            ['category_id' => 1, 'tag_id' => 4],
            ['category_id' => 2, 'tag_id' => 5],
            ['category_id' => 2, 'tag_id' => 3],
            ['category_id' => 3, 'tag_id' => 7],
            ['category_id' => 4, 'tag_id' => 8],
            ['category_id' => 2, 'tag_id' => 9],
            ['category_id' => 3, 'tag_id' => 10],
            ['category_id' => 4, 'tag_id' => 3],
            ['category_id' => 4, 'tag_id' => 2]
        ]);
    }
}
