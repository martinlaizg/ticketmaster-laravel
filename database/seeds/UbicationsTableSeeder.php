<?php

use Illuminate\Database\Seeder;

class UbicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\Ubication::class, 10)->create();
    }
}
