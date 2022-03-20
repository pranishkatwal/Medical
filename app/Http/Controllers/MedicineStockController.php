<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\MedicineStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MedicineStockController extends Controller
{

    public function stockStore(Request $request)
    {
        //validate
        $this->validate($request, [
            'supplier_name' => ['required', 'string', 'max:255'],
            'medicine_manufacturer_id' => ['required', 'exists:medicine_manufacturers,id'],
            'medicine_id' => ['required', 'exists:medicines,id'],
            'manufactured_date' => ['required', 'string', 'max:255'],
            'expiry_date' => ['required', 'string', 'max:255'],
            'cost_price' => ['required', 'numeric'],
            'quantity' => ['required', 'integer'],
        ]);

        $medicine = Medicine::where('id', $request->medicine_id);
        $medicine->update(['selling_price' => $request->selling_price]);

        unset($request['selling_price']);

        MedicineStock::create($request->all());
        $medicine->increment('total_quantity', $request->quantity);

        Session::flash('success', 'You have successfully added medicine');
        return back();
    }

    //
}
