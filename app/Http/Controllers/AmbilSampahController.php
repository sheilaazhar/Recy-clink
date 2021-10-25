<?php

namespace App\Http\Controllers;

use App\Models\AmbilSampah;
use App\Models\Kecamatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AmbilSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambilsampah = new AmbilSampah();
        $tanggal = Carbon::today()->toDateString();
        $ambilsampah->tanggal = $tanggal;
        return view('pengumpulan', compact('ambilsampah'), [
            "title" => "Sampah",
            'active'=> 'sampah',
            'kecamatans' => Kecamatan::all(),
            'user' => User::where('id', Auth::user()->id)->first()
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
     * @param  \App\Models\AmbilSampah  $ambilSampah
     * @return \Illuminate\Http\Response
     */
    public function show(AmbilSampah $ambilSampah)
    {
        //
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
