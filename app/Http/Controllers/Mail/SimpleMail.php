<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SimpleMail extends Controller
{
    public function sendMail(Request $request){
    //dd($request->input('name'));
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
            Mail::html($body, function ($message) use ($email, $subject,$request) {
                $message->to($email)
                    ->subject($subject . ' html from a View');
                $message->body($request);

            });
        }catch (\Exception $e){
            return $e->getMessage();
        }
//
//        Mail::send('simplemail',
//            ['body' => $body],
//            function ($message) use ($email, $subject) {
//            $message->to($email);
//            $message->from('test@test.com');
//            $message->subject($subject);
//            });



        return 'Mail sent successfully';
    }
}
