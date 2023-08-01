<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Sppd;
use Illuminate\Http\Request;

class PengikutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return dd(Sppd::with('pegawai')->get());
        return view('pages.pengikut.index', [
            'title' => 'Data Pengikut',
            'pengikut' => Pegawai::with('sppds')->get()
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
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
