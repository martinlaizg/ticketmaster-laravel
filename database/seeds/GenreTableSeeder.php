<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('genres')->insert([
            'name' => 'Rock'
		]);
		
		DB::table('genres')->insert([
            'name' => 'Pop'
        ]);
    }
}
