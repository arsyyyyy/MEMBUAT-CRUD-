<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        $data = [];

        // Tambahkan 50 record
        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'nama' => $faker->name,
                'alamat' => $faker->address,
            ];
        }

        // Insert data ke dalam tabel 'pegawai'
        DB::table('pegawai')->insert($data);
    }
}