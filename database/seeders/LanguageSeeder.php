<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            ['lan_title' => 'language1', 'lan_description' => 'cool to learn', 'lan_logo' => 'https://cdn.pixabay.com/photo/2013/03/30/00/10/world-97864_960_720.png'],
            ['lan_title' => 'language2', 'lan_description' => 'cool to learn', 'lan_logo' => 'https://cdn.pixabay.com/photo/2013/03/30/00/10/world-97864_960_720.png'],
            ['lan_title' => 'language3', 'lan_description' => 'cool to learn', 'lan_logo' => 'https://cdn.pixabay.com/photo/2013/03/30/00/10/world-97864_960_720.png'],
            ['lan_title' => 'language4', 'lan_description' => 'cool to learn', 'lan_logo' => 'https://cdn.pixabay.com/photo/2013/03/30/00/10/world-97864_960_720.png'],
            ['lan_title' => 'language5', 'lan_description' => 'cool to learn', 'lan_logo' => 'https://cdn.pixabay.com/photo/2013/03/30/00/10/world-97864_960_720.png'],
        ]);
    }
}
