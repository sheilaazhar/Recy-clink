<?php

namespace App\Http\Controllers;

use App\Models\AmbilSampah;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\PesananDetail;

class DashboardController extends Controller
{

    public function index() {
        $jualprodukCount = DB::select(DB::raw("SELECT monthname(created_at) as month, count(id) as jml FROM pesanans WHERE status_kirim='Sudah Dikirim' GROUP BY monthname(created_at) ORDER BY month DESC"));
        $month ="";
        $data ="";
        foreach($jualprodukCount as $val) {
            $month.="'".$val->month."',";
            $data.="$val->jml,";
        }
        //dd($month, $data);

        return view('dashboard.index', compact('data', 'month'), [
            'userCount' => User::count()-1,
            'peremCount' => User::where('jk', 'Perempuan')->count()-1,
            'lakiCount' => User::where('jk', 'Laki-Laki')->count(),
            'kumpulCount' => AmbilSampah::count(),
            'setujuCount' => AmbilSampah::where('status', 'Disetujui')->count(),
            'tolakCount' => AmbilSampah::where('status', 'Ditolak')->count(),
            'menungguCount' => AmbilSampah::where('status', 'Menunggu konfirmasi')->count(),
            'beratCount' => AmbilSampah::where('status', 'Disetujui')->sum('berat'),
            'jualCount' => Pesanan::where('status_kirim', 'Sudah Dikirim')->count(),
            'tanggalCount' =>Pesanan::where('tanggal'),
            //'jualprodukCount' => PesananDetail::sum('jumlah')->groupBy('tanggal')->get()
            'priceCount' => Pesanan::sum('total_harga'),
            'tunggukirimCount' => Pesanan::where('status_kirim', 'Menunggu dikirim')->count(),
        ]);
  }
}
