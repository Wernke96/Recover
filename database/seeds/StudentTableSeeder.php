<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            'username' => Str::random(10),
            'password' => bcrypt('secret'),
            'firstName' => Str::random(10),
            'lastName' => Str::random(10),
            'L1pct' => random(100),
            'L2pct' => random(100),
            'L3pct' => random(100),
            'L4pct' => random(100),
            'L5pct' => random(100),
        ]);

        // factory(App\User::class, 10)->create()->each(function ($user) {
        //     $user->posts()->save(factory(App\Post::class)->make());
        // });
    }
}
/* CREATE TABLE student (ID int, lastName varchar(255), firstName varchar(255),username varchar(255), password varchar(255),L1pct int,L2pct int, L3pct int,L4pct int,L5pct int, L6pct int, L7pct int, L8pct int, L9pct int, L10pct int); */