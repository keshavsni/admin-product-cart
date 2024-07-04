<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function verifyLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])) {
            return redirect()->route('admin.dashboard')->with('success', 'You are Logged in sucessfully.');
        } else {
            return back()->with('error', 'Whoops! invalid email and password.');
        }
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        session()->flush();
        return redirect(route('admin.login'));
    }
}
