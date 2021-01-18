<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PasienSeeder extends Seeder
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
            DB::table('pasien')->insert([
                'no_pasien' => $faker->numberBetween(1000, 2000),
                'nama' => $faker->name,
                'kota' => $faker->randomElement($array = array
                    ('Yogyakarta','Sleman','Kulon Progo','Gunung Kidul','Bantul')),
                'penyakit' => $faker->randomElement($array = array ('Strok',
                    'Diabetes','Hipertensi','Hipotensi','DBD','Tipes',
                    'Tumor','Kanker','Ginjal','Trauma')),
                'jenis_kelamin' => $faker->randomElement($array = array('Laki-Laki','Perempuan'))
            ]);
        }
    }
}
