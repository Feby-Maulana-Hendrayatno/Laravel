<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::create([
            'foto' => 'http://127.0.0.1:8000/assets/qjual.jpg',
        ]);

        Carousel::create([
            'foto' => 'http://127.0.0.1:8000/assets/qjual.jpg',
        ]);

        Carousel::create([
            'foto' => 'http://127.0.0.1:8000/assets/qjual.jpg',
        ]);
    }
}
