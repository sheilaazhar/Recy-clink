<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProdukController extends Controller
{
    public function index()
    {
        return view('produk', [
           "title" => "Produk",
           'active'=> 'produk',
           "produks" => Produk::paginate(20)
        ]);
    }

    public function pesan(Request $request, $id)
    {
        $produk = Produk::where('id', $id)->first();
        $tanggal = Carbon::now();

        //validasi stok
        if($request->jumlah > $produk->stok)
        {
            return redirect('produk');
        }

        //cek validasi
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //simpan ke db pesanan
        if(empty($cek_pesanan))
        {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->total_harga = 0;
            $pesanan->total_produk = 0;
            $pesanan->status = 0;
            $pesanan->save();
        }

        //simpan ke db pesanan detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //cek pesanan detail
        $cek_pesanan_detail = PesananDetail::where('produk_id', $produk->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail))
        {
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->produk_id = $produk->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah;
            $pesanan_detail->jml_harga = $produk->harga*$request->jumlah;
            $pesanan_detail->save();
        }
        else{
            $pesanan_detail = PesananDetail::where('produk_id', $produk->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah;
            
            //harga sekarang
            $harga_pesanan_detail_baru =  $produk->harga*$request->jumlah;
            $pesanan_detail->jml_harga = $pesanan_detail->jml_harga+$harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }

        //jumlah total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan->total_harga = $pesanan->total_harga+$produk->harga*$request->jumlah;
        $pesanan->total_produk = $pesanan->total_produk+$request->jumlah;
        $pesanan->update();

        return redirect('keranjang');
    }

    public function keranjang()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        }

        if(!empty($pesanan_details))
        {
            return view('keranjang', compact('pesanan', 'pesanan_details'), [
                "title" => "Keranjang",
                'active'=> 'keranjang'
            ]);
        }
        else
        {
            return view('keranjang', compact('pesanan'), [
                "title" => "Keranjang",
                'active'=> 'keranjang'
            ]);
        }
        
    }

    public function delete($id)
    {
        //if($post->image){
        //    Storage::delete($post->image);
        //}
        
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->total_harga = $pesanan->total_harga-$pesanan_detail->jml_harga;
        $pesanan->total_produk = $pesanan->total_produk-$pesanan_detail->jumlah;
        $pesanan->update();

        $pesanan_detail->delete();
        $pesananol = Pesanan::where('total_harga', $pesanan->total_harga=0);
        $pesananol->delete();

        return redirect('keranjang')->with('success', 'Produk berhasil dihapus dari keranjang!');
    }

    public function checkout()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->tanggal = Carbon::now();
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach($pesanan_details as $pesanan_detail){
            $produk = Produk::where('id', $pesanan_detail->produk_id)->first();
            $produk->stok = $produk->stok-$pesanan_detail->jumlah;
            $produk->update();
        }

        return redirect('profil');
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
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
