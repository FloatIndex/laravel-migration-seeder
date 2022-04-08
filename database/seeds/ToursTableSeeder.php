<?php

use Illuminate\Database\Seeder;
use App\Tour;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tour = new Tour;

        $tour->reference_code = 'MD9297';
        $tour->destination = 'Thailand';
        $tour->duration = '15 days, 14 nights';
        $tour->price = 2500;
        $tour->name = 'Mesmerizing Gulf of Thailand';
        $tour->class = 'Economy';
        $tour->theme = 'Honeymoon';
        $tour->overview = null;

        $tour->save();
    }
}
