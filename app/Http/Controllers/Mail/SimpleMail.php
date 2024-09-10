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
       // $name = $data['name'];
        Mail::to('marcello.strategy@gmail.com')->send(new SendSimpleMail($data));

        $settings = Settings::all()->pluck('value','name');
        return view('contact')->with('settings',$settings);
    }
    public function sendMail2(Request $request){
    //dd($request->input('name'));
        $data = $request->all();
        $email = 'marcello.strategy@gmail.com';
        $subject = 'Test mail';
        $body = 'Test mail';

        # EXAMPLE 1) Send the plain text email
//        Mail::raw($body, function ($message) use ($email, $subject) {
//            $message->to($email)
//                ->subject($subject . ' plain text');
//        });
//
//        # EXAMPLE 2) Send the HTML email
//        Mail::html($body, function ($message) use ($email, $subject) {
//            $message->to($email)
//                ->subject($subject . ' html');
//        });


        # EXAMPLE 3) Send the HTML email using a View

        $body = view('simplemail')->render();
        try{
            Mail::html($body, function ($message) use ($email, $subject,$data) {
                $message->to($email)
                    ->subject($subject . ' html from a View');
                $message->data($data);
            });
        }catch (\Exception $e){
            return $e->getMessage();
        }

        $settings = Settings::all()->pluck('value','name');
        return view('thankyou')->with('settings',$settings);
    }
}
