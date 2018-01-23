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
            'name' => 'Conciertos',
            'category_id' => 1
        ]);
        DB::table('genres')->insert([
            'name' => 'Dance/Electrónica',
            'category_id' => 1
        ]);
        DB::table('genres')->insert([
            'name' => 'Flamenco/Rumba',
            'category_id' => 1
        ]);
        DB::table('genres')->insert([
            'name' => 'Hard Rock/Metal',
            'category_id' => 1
        ]);
        DB::table('genres')->insert([
            'name' => 'Indie/Alternativo',
            'category_id' => 1
        ]);
        DB::table('genres')->insert([
            'name' => 'Jazz/Blues',
            'category_id' => 1
        ]);
        DB::table('genres')->insert([
            'name' => 'Música Clásica',
            'category_id' => 1
        ]);
        DB::table('genres')->insert([
            'name' => 'Pop/Rock',
            'category_id' => 1
        ]);
        DB::table('genres')->insert([
            'name' => 'Rap/Hip-Hop',
            'category_id' => 1
        ]);
        DB::table('genres')->insert([
            'name' => 'Otros-Música',
            'category_id' => 1
		]);
		
        DB::table('genres')->insert([
            'name' => 'Ballet/Danza',
            'category_id' => 2
        ]);
        DB::table('genres')->insert([
            'name' => 'Circo',
            'category_id' => 2
        ]);
        DB::table('genres')->insert([
            'name' => 'Drama',
            'category_id' => 2
        ]);
        DB::table('genres')->insert([
            'name' => 'Magia',
            'category_id' => 2
        ]);
        DB::table('genres')->insert([
            'name' => 'Musical',
            'category_id' => 2
        ]);
        DB::table('genres')->insert([
            'name' => 'Ópera',
            'category_id' => 2
        ]);
        DB::table('genres')->insert([
            'name' => 'Otros-Arte y Teatro',
            'category_id' => 2
		]);
		
        DB::table('genres')->insert([
            'name' => 'Festival Dance',
            'category_id' => 3
        ]);
        DB::table('genres')->insert([
            'name' => 'Festival de Música',
            'category_id' => 3
        ]);
        DB::table('genres')->insert([
            'name' => 'Otros-Festival',
            'category_id' => 3
		]);
		
        DB::table('genres')->insert([
            'name' => 'Baloncesto',
            'category_id' => 4
        ]);
        DB::table('genres')->insert([
            'name' => 'Ciclismo',
            'category_id' => 4
        ]);
        DB::table('genres')->insert([
            'name' => 'Fútbol',
            'category_id' => 4
        ]);
        DB::table('genres')->insert([
            'name' => 'Motor',
            'category_id' => 4
        ]);
        DB::table('genres')->insert([
            'name' => 'Tenis',
            'category_id' => 4
        ]);
        DB::table('genres')->insert([
            'name' => 'Otros-Deporte',
            'category_id' => 4
        ]);
    }
}
