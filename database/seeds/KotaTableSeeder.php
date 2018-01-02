<?php

use Illuminate\Database\Seeder;

class KotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kota')->insert(array(
        	[
        		'provinsi_id' => 1,
        		'nama_kota' => 'Banda Aceh',
        	],
            [
                'provinsi_id' => 9,
                'nama_kota' => 'Cilacap',
            ],
            [
                'provinsi_id' => 9,
                'nama_kota' => 'Purwokerto',
            ],
        	));
    }
}
