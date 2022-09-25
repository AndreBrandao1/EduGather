<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            #trainers
            ['first_name' => 'Liam', 'last_name' => 'Olivia', 'email' => '1something@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'verified', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Noah', 'last_name' => 'O’Furniture', 'email' => '2something@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'verified', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Paddy', 'last_name' => 'Yew', 'email' => '3something@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'verified', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Olive', 'last_name' => 'Bugg', 'email' => '4something@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'verified', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Aida', 'last_name' => 'Biologist', 'email' => '5something@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'verified', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Maureen', 'last_name' => 'Dactyl', 'email' => '6something@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'verified', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Teri', 'last_name' => 'Legge', 'email' => '7something@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'verified', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Decco', 'last_name' => 'Art', 'email' => 'zsom342asfhc4ething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'verified', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Pejasg', 'last_name' => 'Graffdter', 'email' => 'zsom3ething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'verified', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'jack', 'last_name' => 'asd', 'email' => 'zsom34ething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Kam', 'last_name' => 'asdjh', 'email' => 'zsom342ething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'nat', 'last_name' => 'kjhas', 'email' => 'zsom342aething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'matt', 'last_name' => 'shhha', 'email' => 'zsom342asething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'sesh', 'last_name' => 'prato', 'email' => 'zsom342asfething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'jolie', 'last_name' => 'metali', 'email' => 'zsom342asfhething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'mera', 'last_name' => 'naso', 'email' => 'zsom342asfhcething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainer', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],

            #trainees
            ['first_name' => 'Allie', 'last_name' => 'Erd', 'email' => '9something@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Liz', 'last_name' => 'Mused', 'email' => 'qsomething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Constance', 'last_name' => 'Mused', 'email' => 'asomething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Lois', 'last_name' => 'Nominator', 'email' => 'ssomething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Minnie', 'last_name' => 'Nominator', 'email' => 'dsomething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Lynn', 'last_name' => 'O’Recital', 'email' => 'fsomething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Ray', 'last_name' => 'Sin', 'email' => 'gsomething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Lee', 'last_name' => 'Sin', 'email' => 'hsomet3hing@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Ray', 'last_name' => 'Nice', 'email' => 'jsomething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Isabelle', 'last_name' => 'Commishun', 'email' => 'lsomething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Eileen', 'last_name' => 'Thettick', 'email' => 'ksomething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Rita', 'last_name' => 'Kewshun', 'email' => 'jswometh1ng@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Paige', 'last_name' => 'Knee', 'email' => 'hsomet5hing@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Rhoda', 'last_name' => 'Theriveaquai', 'email' => 'gsomsething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Augusta', 'last_name' => 'Theriveaquai', 'email' => 'asosmething@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Chris', 'last_name' => 'Theriveaquai', 'email' => 'asomethding@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Anne', 'last_name' => 'Yabinlatelee', 'email' => 'asometfhing@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Anita', 'last_name' => 'Convenshun', 'email' => 'asomethqing@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Ivana', 'last_name' => 'brown', 'email' => 'asometehing@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],
            ['first_name' => 'Adam', 'last_name' => 'White', 'email' => 'asomethting@something.com', 'email_verified_at' => '2022-09-25 11:13:24', 'password' => '$2y$10$bbH22mDbPZ.Pj/PYHuM9d.Oz50CpC07HNLcwOshDEdygYhT7isZWS', 'role' => 'trainee', 'status' => 'on_hold', 'remember_token' => ';lkasd;lkasd'],

        ]);
    }
}
