<form method="post" action="">
    <label for="jenis_barang">Jenis Barang:</label>
    <input style='background-color: #f2f2f2;' type="text" name="jenis_barang" id="jenis_barang">
    <input type="submit" value="Submit">
</form>
<style>
    input[type="submit"] {
        background-color: #3876BF; 
        color: #fff;
    }
</style>

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

echo "<table border='1'>";
echo "<tr>
    <th style='background-color: #3876BF;'>Nama Barang</th>
    <th style='background-color: #3876BF;'>Harga</th>
    <th style='background-color: #3876BF;'>Stok</th>
    </tr>";   

if (isset($_POST['jenis_barang'])) {
    $jenis_barang = $_POST['jenis_barang'];

    foreach ($data as $barang) {
        if (strtolower($barang['jenis']) == strtolower($jenis_barang)) {
            echo "<tr>
            <td>{$barang['nama_barang']}</td>
            <td>{$barang['harga']}</td>
            <td>{$barang['stok']}</td>
            </tr>";
        }
    }
    echo "</table>";
}
?>