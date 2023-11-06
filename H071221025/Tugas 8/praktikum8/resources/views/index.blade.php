@extends('layout/template')

@section('carousel')
    <style>
        .carousel-inner img {
            height: 80vh;
            object-fit: cover;
        }
    </style>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://lh3.googleusercontent.com/proxy/dKd1gvW4BI2sv7PF4L4zmF4FVbfHJ3Mqov-OCAoO0S655vi6bQMldhcjzo29eEA2CvbxM9Ggrcfss0zaPiSGsYMPevf2pgg=s0-d" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://th.bing.com/th/id/OIP.Eegt9unWpMVML7nnLzZtUAHaDt?w=338&h=175&c=7&r=0&o=5&dpr=1.5&pid=1.7" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://th.bing.com/th/id/OIP.JbyBp_gpLzwKRZieD7DjIgAAAA?w=207&h=169&c=7&r=0&o=5&dpr=1.5&pid=1.7" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

@section('content')
    <style>
        .container {
            height: 50vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <div class="container">
        <a href="/products" class="btn btn-success">SILAHKAN BERBELANJA</a>
    </div>
@endsection
