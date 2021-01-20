<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tool;

class BikeController extends Controller
{
    public function tool()
    
    {
        $Bikes = Tool::all();

        return response()->json($Bikes);
    }
}
