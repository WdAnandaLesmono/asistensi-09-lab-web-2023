<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

</head>

<body class=" flex flex-col items-center w-full">
    <div class="container">
        <div class="card" style="width: 780px;">
            <div class="card-body">
                <h5 class="card-title">Pilih Jenis Kendaraan</h5>
                <a href="/product/classic%20cars" class="card-link">Classic Cars</a>
                <a href="/product/trucks%20and%20buses" class="card-link"> Trucks and Buses</a>
                <a href="/product/motorcycles" class="card-link"> Motorcycle</a>
                <a href="/product/vintage%20cars" class="card-link"> Vintage cars</a>
                <a href="/product/Planes" class="card-link"> planes</a>
            </div>
        </div>
        
        <h6>Data Produk Kendaraan</h6>
        <table class="border border-collapse w-full max-w-6xl">
            <thead>
                <tr>
                    <th class="p-2 border border-neutral-300">Product Code</th>
                    <th class="p-2 border border-neutral-300">Product Name</th>
                    <th class="p-2 border border-neutral-300">Product Line</th>
                    <th class="p-2 border border-neutral-300">Product Vendor</th>
                    <th class="p-2 border border-neutral-300">Quantity in Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reads as $read)
                    <tr>
                        <td class="p-1 border border-neutral-300">{{ $read->productCode }}</td>
                        <td class="p-1 border border-neutral-300"> <a class="text-blue-600"
                                href="{{ route('detailProduct', ['detailProduct' => $read->productCode]) }}">{{ $read->productName }}
                            </a></td>
                        <td class="p-1 border border-neutral-300">{{ $read->productLine }}</td>
                        <td class="p-1 border border-neutral-300">{{ $read->productVendor }}</td>
                        <td class="p-1 border border-neutral-300">{{ $read->quantityInStock }}</td>
                    </tr>
                @endforeach
            </tbody>


        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
