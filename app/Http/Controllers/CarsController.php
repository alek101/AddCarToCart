<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Http\Resources\Helper;

class CarsController extends Controller
{
    public function index()
    {
        $listCars=Car::select()
        ->join('brands','cars.brand','=','brands.id')
        ->paginate(10);
        $brands=Helper::allBrands();
        return view('prvaStranica',['listCars'=>$listCars,'brands'=>$brands]);
    }

    public function indexWithFilter($filter)
    {
        if($filter=="all") return $this->index();
        $listCars=Car::select()
        ->join('brands','cars.brand','=','brands.id')
        ->where('nazivBrenda',$filter)
        ->paginate(10);
        $brands=Helper::allBrands();
        return view('prvaStranica',['listCars'=>$listCars,'brands'=>$brands]);
    }

    public function show($id)
    {
        $car=Car::select()
        ->join('brands','cars.brand','=','brands.id')
        ->findOrFail($id);
        return view('detalji',['car'=>$car]);
    }

    public function add()
    {
        return view('added');
    }
}
