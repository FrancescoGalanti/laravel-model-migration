<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tool;

class BikeController extends Controller
{
    public function index()
    
    {
        $bikes = Tool::all();

        return response()->json($bikes);
    }
}
