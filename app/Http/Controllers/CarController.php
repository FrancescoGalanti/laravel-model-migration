<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{     
      public function store()
      
      {
        $car = new Car();
        $car->marca = 'honda';
        $car->modello = 'sportiva';
        $car->targa = 'AXD456';
  
        $car->save();

        dd($car);

        return view('Car', compact('car'));

      }
     
}
