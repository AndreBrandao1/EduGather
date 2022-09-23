<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->insert([
            [
                'demander_id' => 1,
                'receiver_id' => 2,
                'contact_status' => 'approved'
            ],
            [
                'demander_id' => 2,
                'receiver_id' => 8,
                'contact_status' => 'on_hold'
            ],
            [
                'demander_id' => 3,
                'receiver_id' => 4,
                'contact_status' => 'denied'
            ],
            [
                'demander_id' => 4,
                'receiver_id' => 6,
                'contact_status' => 'approved'
            ],
            [
                'demander_id' => 5,
                'receiver_id' => 3,
                'contact_status' => 'on_hold'
            ],
            [
                'demander_id' => 6,
                'receiver_id' => 9,
                'contact_status' => 'denied'
            ],
            [
                'demander_id' => 9,
                'receiver_id' => 1,
                'contact_status' => 'approved'
            ],

            [
                'demander_id' => 11,
                'receiver_id' => 4,
                'contact_status' => 'denied'
            ],
        ]);
    }
}
