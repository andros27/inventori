<?php

use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('provinsi')->insert(array(
        	['nama_provinsi' => 'Aceh'],
        	['nama_provinsi' => 'Bali'],
        	['nama_provinsi' => 'Banten'],
        	['nama_provinsi' => 'Bengkulu'],
        	['nama_provinsi' => 'Gorontalo'],
        	['nama_provinsi' => 'Jakarta'],
        	['nama_provinsi' => 'Jambi'],
        	['nama_provinsi' => 'Jawa Barat'],
        	['nama_provinsi' => 'Jawa Tengah'],
        	['nama_provinsi' => 'Jawa Timur'],
        	['nama_provinsi' => 'Kalimantan Barat'],
        	['nama_provinsi' => 'Kalimantan Selatan'],
        	['nama_provinsi' => 'Kalimantan Tengah'],
        	['nama_provinsi' => 'Kalimantan Timur'],
        	['nama_provinsi' => 'Kalimantan Utara'],
        	['nama_provinsi' => 'Kepulauan Bangka Belitung'],
        	['nama_provinsi' => 'Kepulauan Riau'],
        	));
    }
}
