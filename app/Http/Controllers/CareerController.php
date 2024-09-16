<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function dashboard (){
        $careers = DB::table('careers')->orderby('created_at', 'desc')->get();
        $settings = DB::table('settings')->get();
        return view('admin.dashboard', ['careers' => $careers], ['settings' => $settings]);
    }
}
