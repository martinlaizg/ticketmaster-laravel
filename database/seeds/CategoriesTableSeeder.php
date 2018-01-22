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
            'name' => 'Musica',
        ]);

        DB::table('categories')->insert([
            'name' => 'Teatro',
        ]);

        DB::table('categories')->insert([
            'name' => 'Quedada',
        ]);

        DB::table('categories')->insert([
            'name' => 'Dembow',
        ]);
    }
}
