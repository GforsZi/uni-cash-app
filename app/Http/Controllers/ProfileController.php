<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
  function show()
  {
    return view("profile.index", ["tittle" => "Profile page"]);
  }

  function show_set()
  {
    return view("profile.setting", ["tittle" => "Settibg page"]);
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect("/");
  }

  public function delete_notif(Request $request)
  {
    $validateData = $request->validate([
      "user_id" => "required | numeric",
    ]);
    $deleted = DB::table("notifications")
      ->where("user_id", "=", $validateData)
      ->delete();

    if ($deleted) {
      return redirect("/Profile/setting")->with(
        "success",
        "data has been deleted"
      );
    } else {
      return redirect("/Profile/setting")->with(
        "error",
        "data has been not deleted"
      );
    }
  }
}
