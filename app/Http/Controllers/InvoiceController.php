<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index() {
        $invoices = Invoice::with('customer')->get();

        return response()->json([
            'invoices' => $invoices,
        ]);
    }
}
