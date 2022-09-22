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
            ['lan_title' => 'Luxembourgish', 'lan_description' => 'Luxembourgish is a West Germanic language that is spoken mainly in Luxembourg. About 600,000 people speak Luxembourgish worldwide.', 'lan_logo' => 'https://en.wikipedia.org/wiki/Luxembourg#/media/File:Flag_of_Luxembourg.svg'],
            ['lan_title' => 'English', 'lan_description' => 'English is a West Germanic language of the Indo-European language family, with its earliest forms spoken by the inhabitants of early medieval England.', 'lan_logo' => 'https://upload.wikimedia.org/wikipedia/en/b/be/Flag_of_England.svg'],
            ['lan_title' => 'French', 'lan_description' => 'French is a Romance language of the Indo-European family. It descended from the Vulgar Latin of the Roman Empire, as did all Romance languages.', 'lan_logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/250px-Flag_of_France.svg.png'],
            ['lan_title' => 'German', 'lan_description' => 'German is a West Germanic language of the Indo-European language family, mainly spoken in Central Europe.', 'lan_logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/250px-Flag_of_Germany.svg.png'],
            ['lan_title' => 'Portuguese', 'lan_description' => 'Portuguese is a western Romance language of the Indo-European language family, originating in the Iberian Peninsula of Europe.', 'lan_logo' => 'image.png'],
            ['lan_title' => 'Spanish', 'lan_description' => 'Spanish is a Romance language of the Indo-European language family that evolved from colloquial Latin spoken in the Iberian Peninsula of Europe.', 'lan_logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Bandera_de_Espa%C3%B1a.svg/250px-Bandera_de_Espa%C3%B1a.svg.png'],
            ['lan_title' => 'Italian', 'lan_description' => 'Italian is a Romance language of the Indo-European language family.', 'lan_logo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/250px-Flag_of_Italy.svg.png'],

        ]);
    }
}
