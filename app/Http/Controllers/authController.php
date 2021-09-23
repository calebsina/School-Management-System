<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Session;
use Hash;


class authController extends Controller
{
    //
    public function login(){
        return view ('/login');
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:12'
        ]);
        $user = user::where('email','=',$request->email)->first();
        if ($user){
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('/index');
            }else{
                return back()->with('fail','Password Does not match');
            }
        }else{
            return back()->with('fail','This Email is not Registered');

        }

    }

    public function logout(){
        if(session::has('loginId')){
            Session::pull('loginId');
           return redirect('/login');
        }
    }

//function to add new admin
    public function newUser(Request $request){
              $profile = $request->file('file1')->store('adminProfile');

            $request->validate([
                'f_name'=>'required|unique:users',
                'l_name'=>'required',
                'number'=>'required|min:8',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:8|max:15',
                'pass'=>'required|same:password',
                'file'=>'required',
            ]);

            $user = new user();
            $user->f_name = $request->f_name;
            $user->l_name = $request->l_name;
            $user->number = $request->number;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->file = $profile;
            $admin = $user->save();

            if($admin){
                return back()->with('success', 'Admin Created Successfully');
            }else{
                return back()->with('fail', 'an error occurred!! failed to create admin!!');
            }

    }
}
