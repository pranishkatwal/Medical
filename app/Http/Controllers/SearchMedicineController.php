<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;

class SearchMedicineController extends Controller
{
    public function index()
    {
        return view('medicine.searchMedicine');
    }

    public function search(Request $request)
    {
        $medicine = Medicine::where('medicine_name', 'like', $request->name . '%')->get();
        return view('medicine.searchMedicine')->with(['medicine' => $medicine]);
    }
    //
}
