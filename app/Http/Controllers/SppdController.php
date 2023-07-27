<?php

namespace App\Http\Controllers;

use App\Models\Sppd;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SppdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return dd(Sppd::with('pegawai')->get());
        // return dd(Pegawai::with('sppds')->get());
        return view('pages.sppd.index', [
            'title' => 'Data Sppd',
            // 'sppds' => Sppd::with('pegawai')->get()
            'pegawai' => Pegawai::with('sppds')->get()
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
    public function show(Sppd $sppd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sppd $sppd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sppd $sppd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sppd $sppd)
    {
        //
    }
}
