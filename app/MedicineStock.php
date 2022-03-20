<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineStock extends Model
{
    protected $fillable = [
        'medicine_id',
        'medicine_manufacturer_id',
        'supplier_name',
        'manufactured_date',
        'expiry_date',
        'cost_price',
        'quantity'
    ];


}
