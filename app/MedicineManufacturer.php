<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineManufacturer extends Model
{
    protected $fillable = ['manufacturer_name'];

    //
    public function medicines()
    {
        return $this->hasManyThrough(MedicineStock::class, Medicine::class);
    }
}
