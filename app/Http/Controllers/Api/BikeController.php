<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tool;

class BikeController extends Controller
{
    public function tool()
      
    {
     

       $bikes = Tool::all();
      
      return response()->json($bikes);

      /* return view('tools', compact('bikes'));  */

    }
}
