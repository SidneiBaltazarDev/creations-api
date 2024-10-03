<?php

namespace App\Http\Controllers;


use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoiceShow(Request $r) {
        $invoice = Invoice::find($r->id);
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    
    }

    public function invoiceShowAll(Request $r) {
        $invoices = Invoice::all();
        return $invoices;
    }

    public function invoiceInsert(Request $r) {
        $new_invoice = $r->only(['description','valor', 'adress_id', 'user_id ']);

        $invoice = Invoice::create($new_invoice);

        return $invoice;
    }
}
