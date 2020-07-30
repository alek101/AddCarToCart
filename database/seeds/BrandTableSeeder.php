<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $p1=new Brand;

        $p1->nazivBrenda="Brand1";

        $p1->save();

        $p2=new Brand;

        $p2->nazivBrenda="Brand2";

        $p2->save();
    }
}
