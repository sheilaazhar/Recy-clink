@extends('layouts.main')

@section('container')
    <h1 class="text-center mt-3 mb-2">Frequently Asked Questions <br> (FAQ)</h1>

    <div class="container mt-5">
        <div id="accordion py-5">
            <div class="card mb-3">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Apakah ada minimal berat untuk pengumpulan barang?
                </button>
                </h5>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Untuk pengumpulan barang ada minimal pengumpulan dengan minimal berat 1 Kg dan maksimal 5kg barang bekas yang akan di kumpulkan. Jika berat barang tidak sesuai dengan ketentuan permintaan pengumpulan barang akan di tolak oleh admin.
                </div>
            </div>
            </div>
            <div class="card mb-3">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Apa saja barang yang bisa di kumpulkan ?
                </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                Barang yang bisa dikumpulkan pada kami yaitu barang bekas berbahan plastik, kain, dan atau kaleng.
                </div>
            </div>
            </div>
            <div class="card mb-3">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Bagaimana sistem pembayaran untuk membeli produk ?
                </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Sistem pembayaran dilakukan dengan transaksi <i>Cash On Delivery</i>, jadi tim kami akan menghubungi yang bersangkutan (pembeli) lalu mengunjungi rumahnya.
                 </div>
            </div>
            </div>
            <div class="card mb-3">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Apakah warga di luar Kota Bandung dapat membeli Produk?
                    </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        Untuk saat ini mohon maaf kami masih melayani hanya wilayah Kota Bandung.
                     </div>
                </div>
                </div>
        </div>
    </div>
    <p class="text-muted text-center">Apakah pertanyaan kamu terjawab? Jika tidak silahkan hubungi kami pada kontak yang tertera</p>
@endsection