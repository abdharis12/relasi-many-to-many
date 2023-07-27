<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pengikut;
use Illuminate\Http\Request;

class PengikutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return dd(Pegawai::with(['sppds', 'pengikuts'])->get());
        return view('pages.pengikut.index', [
            'title' => 'pengikut',
            'data' => Pegawai::with(['sppds', 'pengikuts'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengikut $pengikut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengikut $pengikut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengikut $pengikut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengikut $pengikut)
    {
        //
    }
}
