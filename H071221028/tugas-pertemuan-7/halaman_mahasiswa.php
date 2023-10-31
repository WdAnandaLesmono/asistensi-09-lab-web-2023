<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require_once('./css_bootsrap.php')
    ?>
    <title>Halaman Mahasiswa</title>
</head>
<body style="align-items: center;">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"><h1>Halaman Mahasiswa</h1></a>
    <form action="logout.php" method="post" class="mb-4">
        <button type="submit" class="btn btn-danger">Log Out</button>
    </form>
  </div>
</nav>
<br>
<br>
<form method="get" class="container">
        <div class="card" style="width: 38rem;">
            <div class="card-body">
                <h5 class="card-title">Tampilkan Data</h5>
                <input type="hidden" class="form-control" name="aksi" value="tampil" required>
                
                <button class="btn btn-success w-100 mt-3" type="submit" >Tampilkan Data</button>
            </div>
        </div>
    </form>



</body>
</html>
<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "db_mahasiswa";

// Fungsi Read (Select)
function ambilDataMahasiswa() {
    global $server, $db_username, $db_password, $db_name; // untuk deklarasikan variabel yang didefinisikan diluar fungsi sebagai variabel global dalam konteks fungsi. VAR GLOBAL spy bisa diakses dimana sj
    $conn = new mysqli($server, $db_username, $db_password, $db_name); // u koneksi datanya dan simpan ke database

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "SELECT  id, Nama, NIM, Prodi FROM tb_mahasiswa"; //untuk mengambil data dari tabel database dengan nama "tb_mahasiswa". 
    $result = $conn->query($sql); //u jalankan pernyataan SQL SELECT yang telah didefinisikan dalam variabel $sql terhadap objek koneksi database $conn.

    $data = array(); //untuk mendeklarasikan variabel $data sebagai sebuah array kosong.

    if ($result->num_rows > 0) { //jika hasilnya punya numrows lebih besar 0 maka dieksekusi dibwh
        while ($row = $result->fetch_assoc()) { //untuk ambil satu baris data dari hasil query dalam bentuk array asosiatif. Hasilnya akan disimpan dalam variabel $row sebagai array asosiatif
            $data[] = $row; //u ambil data yang sudah disimpan di var row ke dalam array
        }
    }

    $conn->close();
    return $data;
}

// tampilkan data dalam bentuk tabel HTML
function tampilkanTabelMahasiswa() {
    $dataMahasiswa = ambilDataMahasiswa();

    echo '<table border="1" class="table table-bordered table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nama</th>';
    echo '<th>NIM</th>';
    echo '<th>Prodi</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($dataMahasiswa as $row) {
        echo '<tr>';
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['Nama']}</td>";
        echo "<td>{$row['NIM']}</td>";
        echo "<td>{$row['Prodi']}</td>";
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}

// Panggil fungsi untuk tampiolkan tabel mahasiswa jika ada parameter aksi
if (isset($_GET['aksi']) && $_GET['aksi'] === 'tampil') { //untuk periksa apakah terdapat parameter bernama "aksi" dalam URL yang dikirimkan melalui metode GET (biasanya melalui tautan atau URL).
    tampilkanTabelMahasiswa();
}
?>

