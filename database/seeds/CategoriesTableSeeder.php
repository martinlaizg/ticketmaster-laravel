<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Balada',
            'genre_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Heavy',
            'genre_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Electro-latino',
            'genre_id' => 3
        ]);

        DB::table('categories')->insert([
            'name' => 'Dembow',
            'genre_id' => 3
        ]);
    }
}
