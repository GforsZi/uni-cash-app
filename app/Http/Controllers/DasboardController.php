<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use App\Models\Finance;
use App\Models\FinalFinance;

class DasboardController extends Controller
{
  public function show(): view
  {
    return view("dasboard.index", [
      "tittle" => "Dasboard page",
      "finances" => Finance::with("user")
        ->latest()
        ->get(),
    ]);
  }
  public function show_final(): view
  {
    return view("dasboard.finalDas", [
      "tittle" => "Dasboard page",
      "finances" => FinalFinance::with("user")
        ->latest()
        ->get(),
    ]);
  }
  public function show_edit(): view
  {
    return view("dasboard.editDas", [
      "tittle" => "Dasboard page",
      "finances" => Finance::with("user")
        ->latest()
        ->get(),
    ]);
  }

  public function show_addData(): view
  {
    return view("dasboard.addDas", [
      "tittle" => "Dasboard page",
    ]);
  }

  public function store_data(Request $request)
  {
    $validateData = $request->validate([
      "keterangan" => "required | max:255",
      "nominal" => "required | numeric",
      "type" => "required",
      "note" => "max:255",
    ]);

    $validateData["user_id"] = auth()->user()->id;

    Finance::create($validateData);

    return redirect("/Dasboard")->with("success", "data added");
  }

  public function delete_data(Request $request)
  {
    $validateData = $request->validate([
      "id" => "required | numeric",
    ]);
    $deleted = DB::table("finances")
      ->where("id", "=", $validateData)
      ->delete();

    if ($deleted) {
      return redirect("/Dasboard/Edit")->with(
        "success",
        "data has been deleted"
      );
    } else {
      return redirect("/Dasboard/Edit")->with(
        "error",
        "data has been not deleted"
      );
    }
  }

  public function add_data_final(Request $request)
  {
    $validateData = $request->validate([
      "user_id" => "required",
      "keterangan" => "required | max:255",
      "note" => "max:255",
    ]);

    $dataPlus = Finance::with("user")
      ->where("type", "plus")
      ->get()
      ->sum("nominal");
    $dataMinus = Finance::with("user")
      ->where("type", "minus")
      ->get()
      ->sum("nominal");
    $total = $dataPlus - $dataMinus;

    $validateData["nominal"] = $total;
    FinalFinance::create($validateData);
    return redirect("/Dasboard/Final")->with("success", "data has been added");
  }

  public function delete_total_data(Request $request)
  {
    $validateData = $request->validate([
      "id" => "required | numeric",
    ]);
    $deleted = DB::table("final_finances")
      ->where("id", "=", $validateData)
      ->delete();

    if ($deleted) {
      return redirect("/Dasboard/Final")->with(
        "success",
        "data has been deleted"
      );
    } else {
      return redirect("/Dasboard/Final")->with(
        "error",
        "data has been not deleted"
      );
    }
  }
}
