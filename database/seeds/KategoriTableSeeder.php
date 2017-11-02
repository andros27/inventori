<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kategori')->insert(array(
        	['nama_kategori' => 'Asbes'],
        	['nama_kategori' => 'Besi'],
        	['nama_kategori' => 'Besi Cor'],
        	['nama_kategori' => 'Aspal'],
        	['nama_kategori' => 'Logam'],
        	['nama_kategori' => 'Beton'],
        	['nama_kategori' => 'Plastik'],
        	['nama_kategori' => 'Semen'],
        	['nama_kategori' => 'Kayu'],
        	['nama_kategori' => 'Baja'],
        	['nama_kategori' => 'Glass Block'],
        	['nama_kategori' => 'Genteng Atap'],
        ));
    }
}
