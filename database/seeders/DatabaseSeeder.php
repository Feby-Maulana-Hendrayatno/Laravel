<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContactSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(LayananSeeder::class);
        $this->call(ProdukSeeder::class);
        $this->call(TentangKamiSeeder::class);
    }
}
