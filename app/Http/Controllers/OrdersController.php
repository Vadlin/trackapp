<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class OrdersController extends Controller

{
    public function index()
    {
        $title = '';

        return view('orders', [
            "title" => "All Order" . $title,
            "barangs" => Barang::all()
        ]);
    }

    public function show($id)
    {
        return view('order', [
            'barang' => Barang::find($id)
        ]);

        // return back()->with('searchError', 'Goods not found');
    }
}
