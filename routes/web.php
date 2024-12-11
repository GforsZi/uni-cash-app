<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\AccountController;

Route::get("/", function () {
  return view("public_page.index", ["tittle" => "Landing page"]);
})->middleware("guest");

Route::get("/Welcome/Laravel", function () {
  return view("welcome", ["tittle" => "Laravel"]);
})->middleware("guest");

Route::get("/Login", [LoginController::class, "show"])
  ->name("login")
  ->middleware("guest");
Route::post("/Login", [LoginController::class, "auth"])->middleware("guest");

Route::get("/Register", [RegisterController::class, "show"])->middleware(
  "guest"
);
Route::post("/Register", [RegisterController::class, "store"])->middleware(
  "guest"
);

Route::get("/Profile", [ProfileController::class, "show"])->middleware("auth");

Route::get("/Profile/setting", [
  ProfileController::class,
  "show_set",
])->middleware("auth");

Route::post("/Profile/setting/deleteNotif", [
  ProfileController::class,
  "delete_notif",
])->middleware("auth");

Route::post("/Profile/Logout", [
  ProfileController::class,
  "logout",
])->middleware("auth");

Route::get("/Home", [HomeController::class, "show"])->middleware("auth");

Route::get("/Home/Notification", [
  HomeController::class,
  "show_notif",
])->middleware("auth");

Route::post("/Home/Notification", [
  HomeController::class,
  "store_notif",
])->middleware("auth");

Route::get("/Dasboard", [DasboardController::class, "show"])->middleware(
  "auth"
);

Route::get("/Dasboard/Add", [
  DasboardController::class,
  "show_addData",
])->middleware("auth");

Route::post("/Dasboard/Add", [
  DasboardController::class,
  "store_data",
])->middleware("auth");

Route::get("/Dasboard/Edit", [
  DasboardController::class,
  "show_edit",
])->middleware("auth");

Route::post("/Dasboard/Edit/delete", [
  DasboardController::class,
  "delete_data",
])->middleware("auth");

Route::get("/Dasboard/Final", [
  DasboardController::class,
  "show_final",
])->middleware("auth");

Route::post("/Dasboard/Final/add", [
  DasboardController::class,
  "add_data_final",
])->middleware("auth");

Route::post("/Dasboard/Final/delete", [
  DasboardController::class,
  "delete_total_data",
])->middleware("auth");

Route::get("/Accounts", [AccountController::class, "show"])->middleware("auth");

Route::get("/Accounts/Detail-account/{user:nik_name}", [
  AccountController::class,
  "show_detail_acc",
])->middleware("auth");
