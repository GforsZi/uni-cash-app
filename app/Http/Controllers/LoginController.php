<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function show()
  {
    return view("login.index", ["tittle" => "Login page"]);
  }

  public function auth(Request $request)
  {
    $credentials = $request->validate([
      "nik_name" => "required | max:255",
      "password" => "required | max:255",
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended("/Home");
    }

    return back()->with("errorLogin", "Login failed!");
  }
}
