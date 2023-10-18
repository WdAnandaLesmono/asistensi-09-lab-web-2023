<?php

$data = [
  [
    "nama_barang" => "HP",
    "harga" => 3000000,
    "stok" => 10,
    "jenis" => "Elektronik"
  ],
  [
    "nama_barang" => "Jeruk",
    "harga" => 5000,
    "stok" => 20,
    "jenis" => "Buah"
  ],
  [
    "nama_barang" => "Kemeja",
    "harga" => 5000,
    "stok" => 9,
    "jenis" => "Pakaian"
  ],
  [
    "nama_barang" => "Apel",
    "harga" => 5000,
    "stok" => 5,
    "jenis" => "Buah"
  ],
  [
    "nama_barang" => "Celana",
    "harga" => 5000,
    "stok" => 10,
    "jenis" => "Pakaian"
  ],
  [
    "nama_barang" => "Laptop",
    "harga" => 50000,
    "stok" => 30,
    "jenis" => "Elektronik"
  ],
  [
    "nama_barang" => "Semangka",
    "harga" => 5000,
    "stok" => 2,
    "jenis" => "Buah"
  ],
  [
    "nama_barang" => "Kaos",
    "harga" => 5000,
    "stok" => 1,
    "jenis" => "Pakaian"
  ],
  [
    "nama_barang" => "VGA",
    "harga" => 2000000,
    "stok" => 0,
    "jenis" => "Elektronik"
  ]
];

$filtered_products = [];


if (isset($_GET["jenis_barang"])) {
  // filter datanya
  $jenis_barang = $_GET["jenis_barang"];

  for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]['jenis'] == $jenis_barang) {
      array_push($filtered_products, $data[$i]);
    }
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search Barang</title>

  <style>
    table,
    th,
    td {
      border: 1px solid black;
      padding: 4px 8px;
      border-collapse: collapse;
    }
  </style>
</head>

<body>
  <form method="GET" >
    <input name="jenis_barang" placeholder="Masukkan tipe">
    <button>Submit</button>
  </form>
  <br>
  <table>
    <thead>
      <tr>
        <th>Nama</th>
        <th>Stock</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($filtered_products); $i++) {
      ?>
        <tr>
          <td><?= $filtered_products[$i]['nama_barang'] ?></td>
          <td><?= $filtered_products[$i]['stok'] ?></td>
          <td>Rp.<?= $filtered_products[$i]['harga'] ?>,-</td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>

</html>