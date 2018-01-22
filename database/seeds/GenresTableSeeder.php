<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'Rock',
            'category_id' => 1
        ]);

        DB::table('genres')->insert([
            'name' => 'Pop',
            'category_id' => 1
        ]);

        DB::table('genres')->insert([
            'name' => 'Reggaeton',
            'category_id' => 1
        ]);

        DB::table('genres')->insert([
            'name' => 'Salsa',
            'category_id' => 1
        ]);
    }
}
