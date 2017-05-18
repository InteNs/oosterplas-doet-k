<?php

use App\Slider;
use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::updateOrCreate([
            'logo' => '/images/logo.png',
            'image1' => '/images/backgroundimg.jpg',
            'image2' => '/images/backgroundimg2.jpg',
            'image3' => '/images/backgroundimg3.jpg',
            'image4' => null,
            'image5' => null,
            'image6' => null,
            'image7' => null,
            'image8' => null,
            'image9' => null,
        ]);
    }
}
