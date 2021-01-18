<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RuanganSeeder extends Seeder
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
            DB::table('ruangan')->insert([
                'no_ruang' => $faker->numberBetween(100, 500),
                'nama_ruang' => $faker->randomElement($array = array
                    ('Matius','Markus','Lukas','Yohanes','Roma','Korintus','Galatia','Efesus',
                    'Filipi','Kolose','Tesalonika','Timotius','Titus','Filemon','Ibrani',
                    'Yakobus','Petrus','Yohanes','Lukas','Wahyu')),
                'lantai' => $faker->numberBetween(1, 5)
            ]);
        }
    }
}
