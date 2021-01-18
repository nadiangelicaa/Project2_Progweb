<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');
        for($i=1; $i<=100; $i++){
            DB::table('dokter')->insert([
                'no_dokter' => $faker->numberBetween(5000, 6000),
                'nama' => $faker->name,
                'shift' => $faker->randomElement($array = array
                    ('Pagi(00-08)','Siang(08-16)','Malam(16-24)')),
                'spesialis' => $faker->randomElement($array = array ('Umum',
                    'Anak','Kulit & Kelamin','Saraf','Mata','Tulang','Psikiater',
                    'Gigi & Mulut','THT','Ginjal','Jantung','Paru','Endokrinologi')),
                'jenis_kelamin' => $faker->randomElement($array = array('Laki-Laki','Perempuan'))
            ]);
        }
    }
}
