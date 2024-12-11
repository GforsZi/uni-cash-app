<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class RegisterController extends Controller
{
  public function show()
  {
    return view("register.index", ["tittle" => "Register page"]);
  }

  public function store(Request $request)
  {
    if ($request["password"] !== $request["frim-pass"]) {
      return redirect("/Register");
      exit();
    }
    $validateData = $request->validate([
      "name" => "required | min:3 | max:255",
      "nik_name" => "required | min:3 | max:255 | unique:users,nik_name",
      "password" => "required | min:5 | max:30",
    ]);

    $validateData["password"] = Hash::make($validateData["password"]);

    User::create($validateData);

    return redirect("/Login")->with("success", "account created");
  }
}
