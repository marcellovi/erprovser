<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function index(){

        //$settings = Settings::whereNull('updated_at')->pluck('value','name');
        return view('admin.settings')->with('settings',Settings::all());

    }

    public function update(){
        $data = request()->all();
        $settings = new Settings();
        $settings->name = $data['name'];
        $settings->value = $data['value'];
        $settings->save();
    }

}
