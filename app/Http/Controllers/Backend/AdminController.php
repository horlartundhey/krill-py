<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //

    public function login(Request $request){
        // $password = '123456789';
        // $dd = Hash::make($password);
        // dd($dd);
        
        return view('panel.auth.login');
    }

    public function panel_admin(Request $request){
        // $password = '123456789';
        // $dd = Hash::make($password);
        // dd($dd);

        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password], true)){
            if(!empty(Auth::User()->status)){
                if(Auth::User()->is_role == '1'){
                    return redirect()->intended('admin/dashboard');
                }else{
                    return redirect('panel')->with('error', 'Not Admin');
                }
            }else{
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find($user_id);
                return redirect('panel')->with('success', 'This email is not allowed');
            }
        }else{
            return redirect()->back()->with('error', 'please enter the correct credentials');
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect(url('panel'));

    }
}
