<?php

namespace App\Http\Controllers;

use App\Models\AmbilSampah;
use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\User;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profil.index', [
            "title" => "Profil",
            'active'=> 'profil',
            'user' => User::where('id', Auth::user()->id)->first(),
            'pesanans' => Pesanan::where('user_id', auth()->user()->id)->where('status',1)->latest()->get(),
            'ambilsampahs' => AmbilSampah::where('user_id', auth()->user()->id)->latest()->take(2)->get(),
        ]);
    }

    public function detailpesanan($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanandetails = PesananDetail::where('pesanan_id', $id)->get();
        return view('profil.detailpesanan', compact('pesanan', 'pesanandetails'), [
            "title" => "DetailPesanan",
            'active'=> 'detailpesanan'
        ]);
    }

    public function pengumpulan()
    {
        return view('profil.pengumpulan', [
            "title" => "pengumpulan",
            'active'=> 'pengumpulan',
            'user' => User::where('id', Auth::user()->id)->first(),
            'ambilsampahs'=>AmbilSampah::where('user_id', auth()->user()->id)->latest()->get()
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
    public function edit(User $user)
    {
        return view('profil.edit', [
            'user' => User::where('id', Auth::user()->id)->first(),
            'kecamatans' => Kecamatan::all(),
            'title' => "Edit Profil",
            'active' => "Edit Profil"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name'=>'required|max:255',
            'jk'=>'required|max:255',
            'phone'=>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9|max:15',
            'kecamatan_id'=>'required',
            'address'=>'required|max:255',
            'password'=>'required|min:5|max:255'
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->jk = $request->jk;
        $user->phone = $request->phone;
        $user->kecamatan_id = $request->kecamatan_id;
        $user->address = $request->address;
        //$user->password = $request->password;

        // if(!empty($request->password))
        // {
        //     $user->password = Hash::make($request->password);
        // }

        if (Hash::check($request->password, $user->password))
        {
            $user->update();
            return redirect('/profil')->with('success', 'Profil Berhasil Diupdate');
        }

        return back()->with('updateError', 'Update Profil Gagal! Pastikan Password Anda Benar');
        
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
