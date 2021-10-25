<?php

namespace App\Http\Controllers;

use App\Models\AmbilSampah;
use Illuminate\Http\Request;

class DashboardPengumpulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pengumpulan.index', [
            'ambilsampahs' => AmbilSampah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AmbilSampahController  $ambilSampah
     * @return \Illuminate\Http\Response
     */
    public function show(AmbilSampah $ambilsampah)
    {
        return view('dashboard.pengumpulan.detail', [
            'ambilsampahs' => AmbilSampah::where('ambilsampah_id', $ambilsampah->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AmbilSampah  $ambilSampah
     * @return \Illuminate\Http\Response
     */
    public function edit(AmbilSampah $ambilSampah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AmbilSampah  $ambilSampah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AmbilSampah $ambilSampah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AmbilSampah  $ambilSampah
     * @return \Illuminate\Http\Response
     */
    public function destroy(AmbilSampah $ambilSampah)
    {
        //
    }
}
