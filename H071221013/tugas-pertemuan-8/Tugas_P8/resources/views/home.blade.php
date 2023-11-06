@extends('layouts.main')
<style>
    .title-word {
        animation: color-animation 4s linear infinite;
    }

    .title-word-1 {
        --color-1: #DF8453;
        --color-2: #3D8DAE;
        --color-3: #E4A9A8;
    }

    .title-word-2 {
        --color-1: #DBAD4A;
        --color-2: #ACCFCB;
        --color-3: #17494D;
    }

    .title-word-3 {
        --color-1: #ACCFCB;
        --color-2: #E4A9A8;
        --color-3: #ACCFCB;
    }

    .title-word-4 {
        --color-1: #3D8DAE;
        --color-2: #DF8453;
        --color-3: #E4A9A8;
    }

    @keyframes color-animation {
        0% {
            color: var(--color-1)
        }

        32% {
            color: var(--color-1)
        }

        33% {
            color: var(--color-2)
        }

        65% {
            color: var(--color-2)
        }

        66% {
            color: var(--color-3)
        }

        99% {
            color: var(--color-3)
        }

        100% {
            color: var(--color-1)
        }
    }

    /* Here are just some visual styles. 🖌 */


    .title {
        text-align: center;
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 50px;
        text-transform: uppercase;
    }
</style>

@section('container')
        <h2 class="title mb-5 mt-5">
            <span class="title-word title-word-1">Selamat</span>
            <span class="title-word title-word-2">Datang</span>
            <span class="title-word title-word-3">di</span>
            <span class="title-word title-word-4">ClassicModels!</span>
        </h2>
    <h5 class="mb-3" style="text-align: center;">Tampilkan ClassicModels sebagai destinasi terbaik bagi penggemar mobil klasik dan berkualitas tinggi. Dengan detail luar biasa dan ketelitian yang tiada duanya, kami menghadirkan koleksi model mobil klasik dalam berbagai skala. Temukan karya seni yang tak tertandingi, dari mobil-mobil antik ikonik hingga mobil balap legendaris. Bergabunglah dalam perjalanan melalui sejarah otomotif dengan kami.</h5>
    <h5 class="mb-3" style="text-align: center;">Selamat menemukan pesona klasik di dunia kendaraan bersama kami!</h5>
@endsection
