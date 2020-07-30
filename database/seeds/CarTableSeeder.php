<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $p1= new Car;
        
        $p1->naziv="Car1";
        $p1->brand=1;
        $p1->slika="/images/car1.jpg";
        $p1->cena=100000;
        $p1->godiste=2020;

        $p1->save();

        $p2= new Car;
        
        $p2->naziv="Car11";
        $p2->brand=1;
        $p2->slika="/images/car1.jpg";
        $p2->cena=90000;
        $p2->godiste=2018;

        $p2->save();

        $p3= new Car;
        
        $p3->naziv="Car2";
        $p3->brand=2;
        $p3->slika="/images/car2.jpg";
        $p3->cena=50000;
        $p3->godiste=2017;

        $p3->save();

    }
}
