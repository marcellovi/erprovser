<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Settings;

class ServiceController extends Controller
{
    public function index(){
        $settings = Settings::whereNull('updated_at')->pluck('value','name');
        return view('services')->with('settings',$settings);
    }
}
