<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvinsiTableSeeder::class);
        $this->call(KategoriTableSeeder::class);
        $this->call(userSeeder::class);
    }
}
