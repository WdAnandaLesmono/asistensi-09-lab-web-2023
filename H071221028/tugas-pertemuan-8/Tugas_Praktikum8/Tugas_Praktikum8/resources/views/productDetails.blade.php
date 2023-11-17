

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @foreach ($reads as $read)
    <h1 class="container mt-5">Detail Produk</h1>
    <div class="container">
        <div class="card">
            <div class="card-header"> <h4>{{ $read->productCode }}</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $read->productName }}</h5>
                <table class="table border border-white">
                    <tr>
                        <td>Jenis Produk</td>
                        <td>:</td>
                        <td>{{ $read->productLine }}</td>
                    </tr>
                    <tr>
                        <td>Skala Produk</td>
                        <td>:</td>
                        <td>{{ $read->productScale }}</td>
                    </tr>
                    <tr>
                        <td>Vendor Produk</td>
                        <td>:</td>
                        <td>{{ $read->productVendor }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi Produk</td>
                        <td>:</td>
                        <td>{{ $read->productDescription }}</td>
                    </tr>
                    <tr>
                        <td>Stok Produk</td>
                        <td>:</td>
                        <td>{{ $read->quantityInStock}}</td>
                    </tr>
                    <tr>
                        <td>Harga beli Produk</td>
                        <td>:</td>
                        <td>{{ $read->buyPrice }}</td>
                    </tr>
                    <tr>
                        <td>MSRP Produk</td>
                        <td>:</td>
                        <td>{{ $read->MSRP }}</td>
                    </tr>
                </table>
                
                <a href="/product" class="btn btn-primary">Back to Product List</a>
            </div>
        </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
@endforeach
</body>

</html>
