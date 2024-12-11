<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Notification;
use App\Models\FinalFinance;

class HomeController extends Controller
{
  public function show(): view
  {
    return view("home.index", [
      "tittle" => "Home page",
      "finances" => FinalFinance::with("user")->get(),
    ]);
  }
  public function show_notif(): view
  {
    return view("home.notification", [
      "tittle" => "Notif page",
      "atribute" => "href='/Home'",
      "notifications" => Notification::with("user")
        ->where("massage_to", auth()->user()->role)
        ->latest()
        ->get(),
    ]);
  }
  public function store_notif(Request $request)
  {
    $validateData = $request->validate([
      "massage" => "required ",
      "massage_to" => "required | max:255",
    ]);
    $validateData["user_id"] = auth()->user()->id;

    Notification::create($validateData);

    return redirect("/Home/Notification")->with("success", "notif sended");
  }
}
