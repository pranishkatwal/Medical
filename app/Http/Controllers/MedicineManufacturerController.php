<?php

namespace App\Http\Controllers;

use App\MedicineManufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MedicineManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturer = MedicineManufacturer::all();
        return view('manufacturer.index', compact('manufacturer'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'manufacturer_name' => ['required', 'string', 'max:255'],
        ]);

        MedicineManufacturer::create($request->all());
        Session::flash('success', 'You have successfully added a manufacturer name');
        return back();
    }

    public function update(Request $request, MedicineManufacturer $medicineManufacturer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\MedicineManufacturer $medicineManufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineManufacturer $medicineManufacturer)
    {
        $medicineManufacturer->delete();
        return back();
    }
}
