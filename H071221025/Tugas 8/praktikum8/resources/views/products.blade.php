@extends('layout.template')

@section('content')
    <style>
        .card {
            height: 100%;
        }

        .card-title {
            letter-spacing: 0.5px;
            line-height: 1.5;
        }

        .card-body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-text {
            flex-grow: 1;
            overflow: hidden;
        }
    </style>

    <div class="row">
        @isset($description)
            <div class="col-md-12 mb-4" style="text-align: justify;">
                <p>{{ $description }}</p>
            </div>
        @endisset

        @foreach ($products as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/OIP.Tfe3aXyRIqz_0k3qJGKW1AHaEc?pid=ImgDet&rs=1" class="card-img-top"
                        alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->productName }}
                            <span class="badge text-bg-success">{{ $item->productLine }}</span>
                        </h5>
                        <p class="card-text">{{ substr($item->productDescription, 0, 100) }}...</p>
                        <h6 class="text-end mb-3">Stock: {{ $item->quantityInStock }}</h6>
                        <a href="/products/{{ $item->productCode }}" class="btn btn-success mt-auto">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection