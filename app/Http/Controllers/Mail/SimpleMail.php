<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\SendSimpleMail;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class SimpleMail extends Controller
{
    public function sendMail(Request $request){
        $data = $request->all();

        Mail::to('marcello.strategy@gmail.com')->send(new SendSimpleMail($data));

        $settings = Settings::all()->pluck('value','name');
        return view('thankyou')->with('settings',$settings);
    }
}
