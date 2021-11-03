@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
  </div>
    <div class="row">
      <div class="col-sm-6 col-md-3 col-lg-3">            
              <div class="panel text-center">
                  <div class="col-md-4 stats-item" style="background-color: #00AABF">
                      <i style="background-color: #00AABF" class="fa fa-line-chart bigicon"></i>
                  </div>
                  <div style="background-color: #00BCD4" class="col-md-4 stats-item">
                      <div class="header-item">Jumlah User</div>
                      <div class="data-item">{{ $userCount }}</div>
                  </div>
              </div>            
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3">            
        <div class="panel text-center">
            <div class="col-md-4 stats-item" style="background-color: #00AABF">
                <i style="background-color: #00AABF" class="fa fa-line-chart bigicon"></i>
            </div>
            <div style="background-color: #00BCD4" class="col-md-4 stats-item">
                <div class="header-item">Total Permintaan</div>
                <div class="data-item">{{ $kumpulCount }}</div>
            </div>
        </div>    
        <div class="col-sm-6 col-md-3 col-lg-3">            
          <div class="panel text-center">
              <div class="col-md-4 stats-item" style="background-color: #00AABF">
                  <i style="background-color: #00AABF" class="fa fa-line-chart bigicon"></i>
              </div>
              <div style="background-color: #00BCD4" class="col-md-4 stats-item">
                  <div class="header-item">Total Penjualan</div>
                  <div class="data-item">{{ $jualCount }}</div>
              </div>
          </div>        
</div>
    </div>
      <div class="chart-container" style="height:10vh; width:15vw">
        <div class="chart">
          <canvas id="pieChart"></canvas>
        </div>
      </div>
  
  <p>Total Permintaan Disetuju : {{ $setujuCount }}</p>
  <p>Total Permintaan Ditolak : {{ $tolakCount }}</p>
  <p>Total Permintaan Menunggu Konfirmasi : {{ $menungguCount }}</p>
  <p>Total Berat Sampah Terkumpul : {{ $beratCount }} kg</p>
  <p>Total Produk Terjual : {{ $jualprodukCount }}</p>
  <p>Hasil Penjualan : Rp{{ number_format($priceCount) }}</p>
  <p>Total Penjualan yang Harus Dikirim : {{ $tunggukirimCount }}</p>

    <script>
      //pie
      var ctxP = document.getElementById("pieChart").getContext('2d');
      var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
          labels: ["Perempuan", "Laki-laki"],
          datasets: [{
            data: [{{$peremCount}}, {{$lakiCount}}],
            backgroundColor: ["#F7464A", "#46BFBD"],
            hoverBackgroundColor: ["#FF5A5E", "#5AD3D1"]
          }]
        },
        options: {
          responsive: true
        }
      });
    </script>
@endsection