<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Settings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function index(){

        //$settings = Settings::whereNull('updated_at')->pluck('value','name');
        return view('admin.settings')->with('settings',Settings::all());

    }

    public function updatew(){
        $data = request()->all();
        $settings = new Settings();
        $settings->name = $data['name'];
        $settings->value = $data['value'];
        $settings->save();
    }

    public function Edit(Request $request): View
    {
        $user =  $request->user();
        $settings = Settings::all();

        return view('admin.settings')->with( compact('settings','user'));
    }
    public function Update(ProfileUpdateRequest $request): \Illuminate\Http\RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        $user =  $request->user();

        $settings = Settings::whereNull('updated_at')->pluck('value','name');
        return Redirect::route('admin.edit')->with( compact('settings','user'));
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $user =  $request->user();
        $settings = Settings::whereNull('updated_at')->pluck('value','name');

       // return back()->with('status', 'password-updated');
        return back()->with( compact('settings','user'),'status', 'password-updated');
    }
    public function updateSocialMedia(Request $request): RedirectResponse
    {
        $data = $request->except('_token','_method');

        foreach ($data as $key => $value) {
            $settings = Settings::where('name',$key); //dd($settings);
            if(empty($value)){
                $value = '#';
            }
            $settings->update(['name'=>$key,'value'=>$value]);
        }

        $settings = Settings::whereNull('updated_at')->pluck('value','name');
        $user =  $request->user();
        return back()->with( compact('settings','user'));
    }
    public function updateInfoEmpresa(Request $request): RedirectResponse
    {
        $data = $request->except('_token','_method');

        foreach ($data as $key => $value) {
            $settings = Settings::where('name',$key);
            if(!empty($value)){
                $settings->update(['name'=>$key,'value'=>$value]);
            }
        }

        $settings = Settings::whereNull('updated_at')->pluck('value','name');
        $user =  $request->user();
        return back()->with( compact('settings','user'));
    }

}
