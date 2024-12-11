<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\User;

class AccountController extends Controller
{
  public function show(): view
  {
    $users = DB::table("users")->get();

    return view("account.index", [
      "tittle" => "accounts page",
      "users" => $users,
    ]);
  }

  public function show_detail_acc(user $user): view
  {
    $users = DB::table("users")->get();

    return view("account.DetailAcc", [
      "tittle" => "detail accounts page",
      "users" => $user,
    ]);
  }
}
