<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asteroid;

class AsteroidController extends Controller
{
    public function hazardous() {
        return response()->json(Asteroid::where('is_hazardous',true)->get());
    }

    public function fastest(request $request) {
        $hazardous = $request->input('hazardous',0) == 'true' ? true : false;

        return response()->json(Asteroid::where('is_hazardous',$hazardous)->orderBy('speed','desc')->get());
    }
}
