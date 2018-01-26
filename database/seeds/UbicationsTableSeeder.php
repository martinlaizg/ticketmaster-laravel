<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class UbicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('ubications')->insert([
			'name' => 'Estadio RCD Espanyol',
			'location' => 'Barcelona',
			'seatable' => true,
			'seats' => 500,
			'rows' => 25,
			'cols' => 20,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		DB::table('ubications')->insert([
			'name' => 'Estadio Santiago Bernabeu',
			'location' => 'Madrid',
			'seatable' => true,
			'seats' => 1000,
			'rows' => 50,
			'cols' => 20,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		DB::table('ubications')->insert([
			'name' => 'Caja Mágica',
			'location' => 'Madrid',
			'seatable' => true,
			'seats' => 800,
			'rows' => 40,
			'cols' => 20,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		DB::table('ubications')->insert([
			'name' => 'IFA',
			'location' => 'Alicante',
			'seatable' => false,
			'seats' => 1000,
			'rows' => 0,
			'cols' => 0,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		DB::table('ubications')->insert([
			'name' => 'Playa del foro y Parque de Pablo',
			'location' => 'Barcelona',
			'seatable' => false,
			'seats' => 20000,
			'rows' => 0,
			'cols' => 0,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		DB::table('ubications')->insert([
			'name' => 'Circo Raluy Legacy',
			'location' => 'Valencia',
			'seatable' => false,
			'seats' => 300,
			'rows' => 0,
			'cols' => 0,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		DB::table('ubications')->insert([
			'name' => 'Auditorio EL BATEL',
			'location' => 'Cartagena',
			'seatable' => true,
			'seats' => 200,
			'rows' => 20,
			'cols' => 10,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		DB::table('ubications')->insert([
			'name' => 'Auditorio Diputación de Alicante',
			'location' => 'Alicante',
			'seatable' => true,
			'seats' => 300,
			'rows' => 15,
			'cols' => 20,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
    }
}
