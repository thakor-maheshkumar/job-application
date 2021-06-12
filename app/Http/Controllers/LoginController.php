<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
class LoginController extends Controller
{
    public function create()
    {
        return view('admin.login');
    }
    public function store(Request $request)
    {
        $user=User::where('email',$request->email)->first();
        if(!Hash::check($request->password,$user->password))
        {
            return redirect()->back()->with('failure','Username or password missmatch');
        }else{
            $request->session()->put('user',$user);
            return redirect('/list');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('create');
    }
}
