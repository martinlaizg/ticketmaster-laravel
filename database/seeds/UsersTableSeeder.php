<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 50)->create();

        DB::table('users')->insert([
			'name' => 'Martin',
			'surname' => 'Laiz Gómez',
            'email' => 'martinlaizg@gmail.com',
            'password' => bcrypt('martinlaiz'),
            'bdate' => Carbon::createFromDate(1996, 10, 17),
            'country' => 'España',
            'poblation' => 'Alicante',
            'role' => 'Admin'
        ]);

        DB::table('users')->insert([
			'name' => 'Sergio',
			'surname' => 'Conesa Santonja',
            'email' => 'sergionejo@gmail.com',
            'password' => bcrypt('sergionejo'),
            'bdate' => '',
            'country' => 'España',
            'poblation' => 'Alicante',
            'role' => 'Admin'
        ]);
    }
}
