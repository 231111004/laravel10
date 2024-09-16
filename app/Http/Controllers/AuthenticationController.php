<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Session; 

class AuthenticationController extends Controller
{
    public function index (){
        return view('login');
    }
  public function authAction(Request $request)
{
    $action = $request->input('action');
    $username = $request->input('username');
    $password = $request->input('password');

    $hashedPassword = hash('sha256', md5($password));

    if ($action === 'register') {
        return $this->register($request); // Pass the whole Request object
    } elseif ($action === 'login') {
        return $this->login($request); // Pass the whole Request object
    }
}

public function register(Request $request)
{
    $hashedPassword = hash('sha256', md5($request->input('password')));

    Users::register($request->input('username'), $hashedPassword);

    return redirect()->route('login')->with('success', 'Registration successful. Please login.');
}

public function login(Request $request)
{
    $hashedPassword = hash('sha256', md5($request->input('password')));
    $user = Users::login($request->input('username'), $hashedPassword);

    if ($user) {
        Session::put('user', $user[0]->id_user);
        return redirect('/dashboard');
    } else {
        return redirect()->back()->with('error', 'Invalid credentials');
    }
    }

}


