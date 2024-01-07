<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\featuresTopModel;

class featuresTopController extends Controller
{
    //
    public function index(){
        $featuresTopData = featuresTopModel::all();
        dd($featuresTopData);
        return view('homepage', ['featuresTopData' => $featuresTopData]);
    }
}
