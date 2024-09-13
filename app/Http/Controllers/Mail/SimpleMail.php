<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\SendSimpleMail;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class SimpleMail extends Controller
{
    public function sendMail(Request $request){
        $data = $request->all();

        Mail::to('contato@erproserv.com.br')
            ->cc('marcello.strategy@gmail.com')
            ->send(new SendSimpleMail($data,'ER Proserv - Contato'));

        $settings = Settings::all()->pluck('value','name');
        return view('thankyou')->with('settings',$settings);
    }

    public function storecareer(Request $request){

        $data = [
          'name' => $request->input('name'),
          'type_service' => $request->input('type_service'),
          'address' => $request->input('address'),
          'phone' => $request->input('phone'),
          'zipcode' => $request->input('zipcode'),
          'state' => $request->input('state'),
          'city' => $request->input('city'),
          'resume' => $request->input('resume')
        ];

        $ins = DB::table('careers')->insert($data);

        Mail::to('contato@erproserv.com.br')
            ->cc('marcello.strategy@gmail.com')
            ->send(new SendSimpleMail($data,'ER Proserv - Trabalhe Conosco'));

        $settings = Settings::all()->pluck('value','name');
        return view('thankyou')->with('settings',$settings);
    }
}
