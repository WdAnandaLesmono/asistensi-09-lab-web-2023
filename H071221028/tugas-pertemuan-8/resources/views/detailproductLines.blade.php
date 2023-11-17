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
    <h1>Data Produk Berjenis {{ $reads[0]->productLine }}</h1>
    @foreach ($reads as $read)
        <div class="table" style="width: 38rem;">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">Nama Kendaraan</th>
                        <td><a
                                href="{{ route('detailProduct', ['detailProduct' => $read->productCode]) }}">{{ $read->productName }}</a>
                        </td>
                    </tr>
                </tbody>
            </table>
</body>

</html>

{{-- <p>========================================================</p>
        <p>Nama Produk : <a
                href="{{ route('detailProduct', ['detailProduct' => $read->productCode]) }}">{{ $read->productName }}</a>
        </p> --}}
@endforeach
</body>

</html>
