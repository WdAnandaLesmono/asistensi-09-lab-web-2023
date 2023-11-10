@extends('layouts.main')
<style>
    .hero__heading {
        font-size: 36px;
        /* Ukuran teks */
        color: #333;
        /* Warna teks */
        text-align: center;
        /* Posisi teks tengah */
        animation: blink 2s infinite;
        /* Animasi berkedip */
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }

</style>
@section('container')
    <center>
        <div class="hero__content h-75 container-custom position-relative">
            <div class="d-flex h-100 align-items-center hero__content-width">
                <div>
                    <h1 class="hero__heading fw-bold" style="font-size: 50px; color: maroon;">Shop Product</h1>
                    <p class="lead fw-bold" style="color: #222831; font-size: bold">Produk adalah karya cemerlang yang menggabungkan 
                    kegunaan dan keindahan. Dengan desain yang elegan dan kualitas terbaik, setiap produk bukan sekadar benda atau layanan, 
                    melainkan ekspresi dari inovasi dan perhatian terhadap detail. Lebih dari memenuhi kebutuhan praktis, produk yang luar 
                    biasa menciptakan pengalaman yang mendalam dan menggetarkan hati pemakainya. Dalam sorotannya yang tak ternilai, produk 
                    menjadi lebih dari sekadar transaksi komersial, melainkan kisah yang berbicara dalam bahasa keindahan dan membangun 
                    ikatan emosional yang abadi.</p>
                    <a href="/product" class="mt-2 btn btn-dark" role="button"><span></span>Go To Product</a>
                </div>
            </div>
        </div>
    </center>
@endsection