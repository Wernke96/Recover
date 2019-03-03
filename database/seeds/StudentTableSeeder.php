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
    }
}
