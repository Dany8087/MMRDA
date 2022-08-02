<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class auth extends Controller
{
    public function login(){
        return view("Auth.index");
    }

    public function registration(){
        return view("Auth.Registration");
    }

    public function registeradmin(Request $request){
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|max:12|min:6'
        ]);
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','You have registered successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }

    public function loginadmin(Request $request){
        $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:6|max:12'
        ]);
        $user = User::where('email', '=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return view('Admin.dashboard');
            }else{
                return back()->with('fail', 'Password does not match.');
            }
            
        } else{
            return back()->with('fail', 'This email is not registered.');
        }
    }

    public function Dashboard(){
        return view('Admin.dashboard');
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect("/");
        }
    }
}
