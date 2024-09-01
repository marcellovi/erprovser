<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Settings;

class HomeController extends Controller
{
    public function index(){
        $settings = Settings::whereNull('updated_at')->pluck('value','name');
        return view('home')->with('settings',$settings);
    }
    public function contact(){
        $settings = Settings::whereNull('updated_at')->pluck('value','name');
        return view('contact')->with('settings',$settings);
    }
}
