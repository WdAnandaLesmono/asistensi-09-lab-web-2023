@extends('layouts.main')
<style>
    h1 {
        padding-top: 20px;
    }
</style>
@section('container')
    <div class="container mt-4">
        <div class="text-center">
            <h1 class="mb-4">Hasil Pencarian Menu</h1>
            <hr class="my-4">
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="list-group">
                    @forelse ($products as $product)
                        <center>
                            <li class="list-group-item">
                                <a href="product/{{ $product->id }}/show" style="color: #643A6B; text-decoration: none;">{{ $product->nama }}</a>
                            </li>
                        </center>
                    @empty
                        <center>
                            <li class="list-group-item">Hasil Tidak Ditemukan</li>
                        </center>
                    @endforelse
                </ul>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="/product" class="btn btn-dark">Kembali</a>
        </div>
    </div>
@endsection
