<?php

namespace App\Http\Controllers;

use App\Models\AmbilSampah;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\PesananDetail;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index', [
            'userCount' => User::count()-1,
            'peremCount' => User::where('jk', 'Perempuan')->count()-1,
            'lakiCount' => User::where('jk', 'Laki-Laki')->count(),
            'kumpulCount' => AmbilSampah::count(),
            'setujuCount' => AmbilSampah::where('status', 'Disetujui')->count(),
            'tolakCount' => AmbilSampah::where('status', 'Ditolak')->count(),
            'menungguCount' => AmbilSampah::where('status', 'Menunggu konfirmasi')->count(),
            'beratCount' => AmbilSampah::where('status', 'Disetujui')->sum('berat'),
            'jualCount' => Pesanan::where('status_kirim', 'Dikirim')->count(),
            'tanggalCount' =>Pesanan::where('tanggal'),
            'jualprodukCount' => PesananDetail::sum('jumlah'),
            'priceCount' => Pesanan::sum('total_harga'),
            'tunggukirimCount' => Pesanan::where('status_kirim', 'Menunggu dikirim')->count(),
        ]);
  }
}
