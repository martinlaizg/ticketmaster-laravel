<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(GenresTableSeeder::class);
		$this->call(EventsTableSeeder::class);
		//$this->call(UbicationsTableSeeder::class);
		//$this->call(ShowsTableSeeder::class);
    }
}
