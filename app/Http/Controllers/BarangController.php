<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('masuk');
        $pegawai=Barang::all();
        return view('barang.tampil', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barang =Barang::all();
        return view('Barang.tambah');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd('msk');
        $pegawai = new Barang;
        $pegawai->sku = $request ->sku;
        $pegawai->nama = $request ->nama;
        $pegawai->namasup = $request ->namasup;
        $pegawai->tgl_datang = $request ->tgl_datang;
        $pegawai->alamat = $request ->alamat;        
        $pegawai->foto = $request ->foto;
        $pegawai->nohp = $request ->nohp;        
        
        $pegawai->save();
        return redirect ('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $barang = Barang::find($id);
        return view ('barang.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $barang = Barang::find($id);
        return view ('barang.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pegawai = \App\Barang::find($id);
        $pegawai->sku = $request ->sku;
        $pegawai->nama = $request ->nama;
        $pegawai->namasup = $request ->namasup;
        $pegawai->tgl_datang = $request ->tgl_datang;
        $pegawai->alamat = $request ->alamat;        
        $pegawai->foto = $request ->foto;
        $pegawai->nohp = $request ->nohp;  
        $pegawai->save();  


        return redirect('barang');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pegawai = Barang::find($id);
        $pegawai->delete();

        return redirect('barang');
    }
    public function pdf()
    {
        $barang=Barang::all();
        $pdf = PDF::loadView('barang.pdf', ['barang'=>$barang]);
        return $pdf->download('barang.pdf');
    }
}
