<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Martin Laiz Gómez',
            'email' => 'martinlaizg@gmail.com',
            'password' => bcrypt('martinlaiz'),
            'bdate' => '',
            'country' => 'España',
            'poblation' => 'Alicante',
        ]);
    }
}
