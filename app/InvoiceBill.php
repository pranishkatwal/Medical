<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceBill extends Model
{

    public static function bill()
    {
        $invoiceBill = InvoiceBill::last()->get();
        if (!$invoiceBill) {
            return InvoiceBill::create(['bill_number' => 1]);
        }
        return $invoiceBill->increment('bill_number', 1);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'invoice_bill_id');
    }
}
