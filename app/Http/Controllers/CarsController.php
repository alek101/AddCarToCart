<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function index()
    {
        $listCars=Car::select()
        ->join('brands','cars.brand','=','brands.id')
        ->paginate(10);
        return view('prvaStranica',['listCars'=>$listCars]);
    }

    public function show($id)
    {
        $car=Car::select()
        ->join('brands','cars.brand','=','brands.id')
        ->where('cars.id',$id)
        ->findOrFail(1);
        return view('detalji',['car'=>$car]);
    }
}
