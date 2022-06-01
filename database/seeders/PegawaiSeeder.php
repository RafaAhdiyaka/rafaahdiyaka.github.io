<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <=10; $i++){

        DB::table('pegawai')->insert([
            'name' => $faker->name(),
            'jeniskelamin' => 'laki-laki,perempuan', 
            'notelepon' => $faker->numberBetween(11),
         ]);
     }
}

}