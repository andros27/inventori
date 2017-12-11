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
        	['nama_kategori' => 'Besi'],
        	['nama_kategori' => 'Logam'],
        	['nama_kategori' => 'Beton'],
        	['nama_kategori' => 'Plastik'],
        	['nama_kategori' => 'Semen'],
        	['nama_kategori' => 'Kayu'],
        	['nama_kategori' => 'Baja'],
        	['nama_kategori' => 'Glass Block'],
        	['nama_kategori' => 'Genteng Atap'],
            ['nama_kategori' => 'Kran'],
            ['nama_kategori' => 'Saluran Air'],
            ['nama_kategori' => 'Cat'],
            ['nama_kategori' => 'Kuas'],
            ['nama_kategori' => 'PLamir'],
            ['nama_kategori' => 'Pompa'],
            ['nama_kategori' => 'Pintu'],
            ['nama_kategori' => 'Kawat'],
            ['nama_kategori' => 'Paku'],
            ['nama_kategori' => 'Proyek'],
            ['nama_kategori' => 'Peralatan Kamar Mandi'],
            ['nama_kategori' => 'Peralatan Tukang'],
        ));
    }
}
