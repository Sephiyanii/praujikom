<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('backend.pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Dokter = Dokter::all();
        $Pasien = Pasien::all();
        $Poliklinik = Poliklinik::all();
        return view('backend.pendaftaran.create', compact('Dokter', 'Pasien','Poloklinik'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftaran = new Pendaftaran;
        $pendaftaran->Nomor_pndftrn = $request->Nomor_pndftrn;
        $pendaftaran->Tanggal_pndftrn = $request->Tanggal_pndftrn;
        $pendaftaran->Kode_dktr_id = $request->Kode_dktr_id;
        $pendaftaran->Kode_psien_id = $request->Kode_psien_id;
        $pendaftaran->Kode_plklinik_id = $request->Kode_plklinik_id;
        $pendaftaran->Biaya = $request->Biaya;
        $pendaftaran->Keterangan = $request->Keterangan;
        $pendaftaran->user_id = Auth::user()->id;
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
