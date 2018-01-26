<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//factory(App\Event::class, 100)->create();
		
		DB::table('events')->insert([
            'name' => 'Shakira "El Dorado" world tour',
			'description' => 'Llega la nueva gira de Shakira con nuevos conciertos en Bilbao, Madrid, A Coruña y Barcelona con su gira mundial El Dorado. El tour empezará en Alemania y hará paradas en Europa y Estados Unidos. ¡No te quedes sin entradas para Shakira!',
			'genre_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('events')->insert([
            'name' => 'Fito y Fitipaldis',
			'description' => 'Fito & Fitipaldis es un grupo de rock español fundado en 1998 por Fito Cabrales. El vocalista bilbaíno, quién cosechó éxitos durante 12 años con su banda Platero y Tú, deja atrás su anterior grupo para dar rienda suelta a nuevas letras y sonidos más intimistas y acústicos.',
            'genre_id' => 1,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('events')->insert([
            'name' => 'RCD Espanyol - Villarreal CF',
			'description' => 'RCD Espanyol - Villarreal CF',
            'genre_id' => 23,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('events')->insert([
            'name' => 'El Mago Pop: Nada Es Imposible',
			'description' => 'NADA ES IMPOSIBLE es el nuevo espectáculo de Antonio Díaz, EL MAGO POP, con el que triunfa en el Teatro Rialto de Madrid, ofreciendo un viaje por lo extraordinario lleno de asombro, diversión, sensibilidad, sorpresas, ritmo y emoción, en una aventura llena de ilusiones que confirma que, cuando EL MAGO POP está en escena, nada es imposible!',
            'genre_id' => 14,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('events')->insert([
            'name' => 'Circo Raluy Legacy',
			'description' => 'El Circo Raluy Legacy, encabezado por el mayor de la saga, Luis Raluy junto al resto de su familia, han conservado el legado que ha ido pasando de padres a hijos y que a día de hoy, está considerado uno de los museos ambulante más importantes de Europa con sus más de 40 caravanas y camiones de principios de siglo pasado consiguiendo así, transportar directamente a la época dorada del mundo del circo a todos aquellos que se atreven a vivir esta experiencia, la de adentrarse en el Circo Raluy.',
            'genre_id' => 12,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		DB::table('events')->insert([
            'name' => 'Barcelona Beach Festival',
			'description' => 'Los precios incluyen +1€ de donativo a obras sociales. Los menores de edad hasta 16 años podrán acceder al espectáculo pagando la entrada correspondiente debiendo ir acompañados por sus padres o un tutor. Los tutores deberán llevar la documentación que los identifique como tales. Los menores a partir de 16 años podrán acceder al recinto en las mismas condiciones que los adultos sin necesidad de ir acompañados',
			'genre_id' => 19,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
    }
}
