@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
  </div>
    <div class="row">
      <div class="col-md-3">            
              <div class="panel text-center">
                  <div style="background-color: #FFF0F5" class="stats-item">
                      <div class="header-item">Jumlah User</div>
                      <div class="data-item"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>{{ $userCount }}</div>
                  </div>
              </div>             
      </div>
      <div class="col-md-3">            
        <div class="panel text-center">
            <div style="background-color: #E6E6FA" class="stats-item">
                <div class="header-item">Total Permintaan</div>
                <div class="data-item">{{ $kumpulCount }}</div>
            </div>
        </div>
      </div>    
      <div class="col-md-3">            
          <div class="panel text-center">
              <div style="background-color: #FAFAD2" class="stats-item">
                  <div class="header-item">Total Penjualan</div>
                  <div class="data-item">{{ $jualCount }}</div>
              </div>
          </div>        
      </div>
  </div>
  <div class="row">
      <div class="col-md-4 chart-container" style="height:10vh; width:20vw">
          <h4 class="text-center">Data User</h4>
          <div class="chart chart-user">
              <canvas id="pieChart-user"></canvas>
          </div>
      </div>
      <div class="col-md-4 chart-container" style="height:10vh; width:20vw">
        <h4 class="text-center">Data Permintaan</h4>
        <div class="chart chart-permintaan">
            <canvas id="pieChart-permintaan"></canvas>
        </div>
      </div>
      <div class="col-md-4 chart-container" style="height:10vh; width:20vw">
        <h4 class="text-center">Data Penjualan</h4>
        <div class="chart chart-penjualan">
            <canvas id="lineChart-penjualan"></canvas>
        </div>
      </div>
  </div>

    <script>
      //pie
      var ctxP = document.getElementById("pieChart-user").getContext('2d');
      var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
          labels: ["Perempuan", "Laki-laki"],
          datasets: [{
            data: [{{$peremCount}}, {{$lakiCount}}],
            backgroundColor: ["#DB7093", "#46BFBD"],
            hoverBackgroundColor: ["#FFC0CB", "#5AD3D1"]
          }]
        },
        options: {
          responsive: true
        }
      });
    </script>
    <script>
      //pie
      var ctxP = document.getElementById("pieChart-permintaan").getContext('2d');
      var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
          labels: ["Disetujui", "Ditolak", "Menunggu Konfirmasi"],
          datasets: [{
            data: [{{$setujuCount}}, {{$tolakCount}}, {{$menungguCount}}],
            backgroundColor: ["#FDB45C", "#4169E1", "#4D5360" ],
            hoverBackgroundColor: ["#FFC870", "#87CEEB", "#616774"]
          }]
        },
        options: {
          responsive: true
        }
      });
    </script>
    <script>
      var ctxL = document.getElementById("lineChart-penjualan").getContext('2d');
      var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], //inishe yang diganti
          datasets: [{
             label: "Jumlah Barang Terjual",
              data: [{{$jualprodukCount}}],
              backgroundColor: [
                'rgba(105, 0, 132, .2)'
              ],
              borderColor: [
                'rgba(200, 99, 132, .7)'
              ],
              borderWidth: 2
            }
          ]
        },
        options: {
          responsive: true
        }
      });
    </script>
@endsection