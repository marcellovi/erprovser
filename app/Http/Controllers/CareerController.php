<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function dashboard (){
        $careers = DB::table('careers')->orderby('created_at', 'desc')->paginate(15);
        $settings = DB::table('settings')->get();
        return view('admin.dashboard', ['careers' => $careers], ['settings' => $settings]);
    }
    public function show (Request $request, $id){
        $career = DB::table('careers')->where('id', $id)->first();
        $settings = DB::table('settings')->get();
        return view('admin.details', ['career' => $career], ['settings' => $settings]);
    }
    public function destroy ($id){
        $career = DB::table('careers')->where('id', $id)->delete();
        $careers = DB::table('careers')->orderby('created_at', 'desc')->paginate(15);
        $settings = DB::table('settings')->get();
        return back()->withInput([['$careers' => $careers], ['settings' => $settings]]);
    }
    public function status (Request $request, $id,$bol){

        $career = DB::table('careers')->where('id', $id)->update(['active' => !$bol]);
        $careers = DB::table('careers')->orderby('created_at', 'desc')->paginate(15);
        $settings = DB::table('settings')->get();
        return back()->withInput([['$careers' => $careers], ['settings' => $settings]]);
        //return view('admin.dashboard', ['$careers' => $careers], ['settings' => $settings]);
    }
}
