<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class AuthController extends Controller
{
    public function getLogin()
    {
        if(!session('login')){
            return view("auth.login");
        }
        return redirect("/");
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'email' => "required",
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }else{
            session()->flush();
            $user = User::where('email', $request->get('email'))->firstOrFail();
            if($user){
                if(Hash::check($request->get('password'), $user->password)){
                    session(['login'=>true]);
                    Auth::user();
                    session(['email'=>$user->email]);
                    if($user->role == "admin"){
                        return redirect("admin");
                    }else{
                        return redirect("/");
                    }

                }
            }

            return redirect("login")->with('error', 'wrong email or password');
        }
    }

    public function logout()
    {
        if(session('login')){
            session()->flush();
            return redirect("/");
        }
    }
}
