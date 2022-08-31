<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangTracker;
use App\Models\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.input.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.input.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new Barang();
        $barang->nama_pemesan = $request->nama_pemesan;
        $barang->email_pemesan = $request->email_pemesan;
        $barang->nama = $request->nama;
        $barang->alamat = $request->alamat;
        $barang->jenis = $request->jenis;
        $barang->jumlah = $request->jumlah;
        $barang->invoice = $request->invoice;
        $barang->status = 'belum dikerjakan';
        $barang->save();

        return redirect('/dashboard/daftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function show(Input $input)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function edit(Input $input)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->status = $request->status;
        $barang->save();


        $tracker = new BarangTracker();
        $tracker->divisi = Auth::user()->divisi;
        $tracker->name = Auth::user()->name;
        $tracker->status = $request->status;
        $tracker->barang_id = $id;

        $tracker->save();
        return redirect('/dashboard/daftar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Barang::destroy($id);
        // return redirect('/dashboard/daftar');
    }
}
