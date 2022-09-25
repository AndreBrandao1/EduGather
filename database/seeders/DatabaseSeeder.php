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
            LanguageSeeder::class,
            LanguageCourseSeeder::class,
            ContactSeeder::class,
        ]);
        \App\Models\User::factory(100)->create();
        \App\Models\Course::factory(50)->create();
        $this->call([
            CourseTagSeeder::class,
        ]);
        \App\Models\User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            
        ]);
        \App\Models\Contact::factory(100)->create();
        \App\Models\LanguageCourse::factory(10)->create();
        \App\Models\CourseTag::factory(10)->create();

    }
}
