<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            CatTagSeeder::class,
            CourseSeeder::class,
            CourseTagSeeder::class,
            LanguageSeeder::class,
            LanguageCourseSeeder::class,
            ContactSeeder::class,
        ]);
        \App\Models\User::factory(100)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
        ]);
    }
}
