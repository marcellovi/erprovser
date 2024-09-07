<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Settings;

class AboutController extends Controller
{
    public function index(){
        $settings = Settings::all()->pluck('value','name');
        return view('about')->with('settings',$settings);
    }
}
