<?php

namespace App\Http\Controllers;

use App\Models\featuresTopModel;
use Illuminate\Http\Request;
use App\Models\menuModel;
use App\Models\sliderModel;
use App\Models\featuresBottomModel;
use App\Models\InfographicModel;
use App\Models\InfographicBgModel;

class menuController extends Controller
{
    //
    public function index()
    {
        $menuData = menuModel::all();
        $featuresTopData = featuresTopModel::all();
        $sliderData = sliderModel::all();
        $featuresBottomData = featuresBottomModel::all();
        $infographicData = InfographicModel::all();
        $infographicBgImageData = InfographicBgModel::all();
        // dd($menuData);
        return view('homepage', [
            'menuData' => $menuData, 
            'featuresTopData' => $featuresTopData,
            'sliderData' => $sliderData,
            'featuresBottomData' => $featuresBottomData,
            'infographicData' => $infographicData,
            'infographicBgImageData'=> $infographicBgImageData
        ]);
    }
}
