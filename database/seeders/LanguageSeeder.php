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
        DB::table('languages')->insert([['lan_title' => 'Luxembourgish', 'lan_description' => 'Luxembourgish is a West Germanic language that is spoken mainly in Luxembourg. About 600,000 people speak Luxembourgish worldwide.', 'lan_logo' => '🇱🇺'],
            ['lan_title' => 'English', 'lan_description' => 'English is a West Germanic language of the Indo-European language family, with its earliest forms spoken by the inhabitants of early medieval England.', 'lan_logo' => '🏴󠁧󠁢󠁥󠁮󠁧󠁿'],
            ['lan_title' => 'French', 'lan_description' => 'French is a Romance language of the Indo-European family. It descended from the Vulgar Latin of the Roman Empire, as did all Romance languages.', 'lan_logo' => '🇫🇷'],
            ['lan_title' => 'German', 'lan_description' => 'German is a West Germanic language of the Indo-European language family, mainly spoken in Central Europe.', 'lan_logo' => '🇩🇪'],
            ['lan_title' => 'Portuguese', 'lan_description' => 'Portuguese is a western Romance language of the Indo-European language family, originating in the Iberian Peninsula of Europe.', 'lan_logo' => '🇵🇹'],
            ['lan_title' => 'Spanish', 'lan_description' => 'Spanish is a Romance language of the Indo-European language family that evolved from colloquial Latin spoken in the Iberian Peninsula of Europe.', 'lan_logo' => '🇪🇸'],
            ['lan_title' => 'Italian', 'lan_description' => 'Italian is a Romance language of the Indo-European language family.', 'lan_logo' => '🇮🇹'],

        ]);
    }
}
