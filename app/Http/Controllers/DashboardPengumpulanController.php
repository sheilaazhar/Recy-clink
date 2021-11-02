<?php

namespace App\Http\Controllers;

use App\Models\AmbilSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\DataNotification;
use App\Models\User;

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

    public function setuju($id)
    {
        $ambilsampah = AmbilSampah::find($id);
        $ambilsampah->status="Disetujui";
        $ambilsampah->save();
        $user = User::where('id', $ambilsampah->user_id)->first();
        Notification::send($user, new DataNotification($ambilsampah));

        return redirect()->back();
    }

    public function tolak($id)
    {
        $ambilsampah = AmbilSampah::find($id);
        $ambilsampah->status="Ditolak";
        $ambilsampah->save();
        $user = User::where('id', $ambilsampah->user_id)->first();
        Notification::send($user, new DataNotification($ambilsampah));

        return redirect()->back();
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
