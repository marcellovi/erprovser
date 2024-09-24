<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $settings = Settings::all()->pluck('value','name');
        return view('home')->with('settings',$settings);
    }
    public function contact(){
        $settings = Settings::all()->pluck('value','name');
        return view('contact')->with('settings',$settings);
    }
    public function trabalheconosco(){
        $settings = Settings::all()->pluck('value','name');
        $careers = DB::table('type_services')->select('name')->orderBy('name')->get();

        return view('career')->with(compact('careers','settings'));
    }

    public function thankyou(){
        $settings = Settings::all()->pluck('value','name');
        return view('thankyou')->with('settings',$settings);
    }
}
