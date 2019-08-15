<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\Poliklinik;
use App\Dokter;
use Auth;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        $Dokter = Dokter::all();
        $Poliklinik = Poliklinik::all();
        return view('backend.dokter.index', compact('pendaftaran', 'Poliklinik', 'Dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pendaftaran = Pendaftaran::all();
        return view('backend.dokter.create', compact('pendaftaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Dokter = new Dokter;
        $Dokter->Kode_dktr = $request->Kode_dktr;
        $Dokter->Nama_dktr = $request->Nama_dktr;
        $Dokter->Spesialis = $request->Spesialis;
        $Dokter->Alamat_dktr = $request->Alamat_dktr;
        $Dokter->Telpn_dktr = $request->Telpn_dktr;
        $Dokter->Kode_plklinik = $request->Kode_plklinik;
        $Dokter->Tarif = $request->Tarif;
        $Dokter->save();
        // $Dokter->pendafataran()->attach($request->pendaftaran);
        return redirect()->route('dokter.index');
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
