<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require_once('./css_bootsrap.php')
    ?>
    <title>CRUD Functions</title>
</head>

<body class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1>Halaman Admin</h1>
            </a>
            <form action="logout.php" method="post" class="mb-4">
                <button type="submit" class="btn btn-danger">Log Out</button>
            </form>
        </div>
    </nav>
    <br>
    <!-- Formulir Tambah Data -->
    <div class="d-flex justify-content-evenly">

        <form method="post">
            <div class="card" style="width: 38rem;">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data</h5>
                    <input type="hidden" class="form-control" name="action" value="tambah" required>
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="action" value="tambah">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" required>
                        <label for="nim" class="form-label">NIM:</label>
                        <input type="text" class="form-control" name="nim" required>
                        <label for="prodi" class="form-label">Prodi:</label>
                        <input type="text" class="form-control" name="prodi" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <button class="btn btn-primary w-100 mt-3" type="submit">Tambah Data</button>

                </div>
            </div>
        </form>
        <br>
        <br>

        <form method="post">
            <div class="card" style="width: 38rem;">
                <div class="card-body">
                    <h5 class="card-title">Edit Data</h5>
                    <input type="hidden" class="form-control" name="action" value="perbarui" required>
                    <div class="mb-3">
                        <label for="id" class="form-label">ID Data:</label>
                        <input type="text" class="form-control" name="id" required>
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" required>
                        <label for="nim" class="form-label">Nim:</label>
                        <input type="text" class="form-control" name="nim" required>
                        <label for="prodi" class="form-label">Prodi:</label>
                        <input type="text" class="form-control" name="prodi" required>
                    </div>
                    <button class="btn btn-primary w-100 mt-3" type="submit">Edit Data</button>

                </div>
            </div>
        </form>

    </div>
    <br>
    <br>

    <div class="d-flex justify-content-around">
        <form method="post">
            <div class="card" style="width: 38rem;">
                <div class="card-body">
                    <h5 class="card-title">Hapus Data</h5>
                    <input type="hidden" class="form-control" name="action" value="hapus" required>
                    <div class="mb-3">
                        <label for="id" class="form-label">ID Data:</label>
                        <input type="text" class="form-control" name="id" required>
                    </div>
                    <button class="btn btn-danger w-100 mt-3" type="submit">Hapus Data</button>
                </div>
            </div>
        </form>

        <form method="post">
            <div class="card" style="width: 38rem;">
                <div class="card-body">
                    <h5 class="card-title">Tampilkan Data</h5>
                    <input type="hidden" class="form-control" name="action" value="tampil" required>

                    <button class="btn btn-success w-100 mt-3" type="submit">Tampilkan Data</button>
                </div>
            </div>
        </form>


    </div>




    <?php
    session_start();

    // Periksa apakah pengguna sudah login dan memiliki peran admin
    if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "admin") {
        header("Location: login.php"); // Redirect ke halaman login jika belum login
        exit();
    }

    $server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "db_mahasiswa";

    // Fungsi Create (Insert)
    function tambahData($nama, $nim, $prodi)
    {
        global $server, $db_username, $db_password, $db_name; // untuk deklarasikan variabel yang didefinisikan diluar fungsi sebagai variabel global dalam konteks fungsi. VAR GLOBAL spy bisa diakses dimana sj
        $conn = new mysqli($server, $db_username, $db_password, $db_name); // u koneksi datanya dan simpan ke database 

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "INSERT INTO tb_mahasiswa (Nama, NIM, Prodi) VALUES (?, ?, ?)"; //untuk lakukan operasi INSERT pada tabel "mahasiswa" dalam database. (?) sebagai tanda tempat parameter akan diikat nanti.
        $stmt = $conn->prepare($sql); //untuk siapkan pernyataan SQL menggunakan objek koneksi ke database yang telah dibuat sebelumnya. 
        $stmt->bind_param("sss", $nama, $nim, $prodi);

        $result = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $result;
    }

    // Fungsi Read (Select)
    function ambilDataMahasiswa()
    {
        global $server, $db_username, $db_password, $db_name;

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "SELECT  id, Nama, NIM, Prodi FROM tb_mahasiswa";
        $result = $conn->query($sql);

        $data = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        $conn->close();
        return $data;
    }

    // Menampilkan data dalam bentuk tabel HTML
    function tampilkanTabelMahasiswa()
    {
        $dataMahasiswa = ambilDataMahasiswa();
    ?>
    <?php

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

    // Fungsi Update
    function perbaruiData($id, $nama, $nim, $prodi)
    {
        global $server, $db_username, $db_password, $db_name;

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "UPDATE tb_mahasiswa SET Nama=?, NIM=?, Prodi=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $nama, $nim, $prodi, $id);

        $result = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $result;
    }

    // Fungsi Delete
    function hapusData($id)
    {
        global $server, $db_username, $db_password, $db_name;

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "DELETE FROM tb_mahasiswa WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        $result = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $result;
    }

    // Menangani Form Submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["action"])) {
            $action = $_POST["action"];

            switch ($action) {
                case 'tambah':
                    if (isset($_POST["nama"]) && isset($_POST["nim"]) && isset($_POST["prodi"])) {
                        tambahData($_POST["nama"], $_POST["nim"], $_POST["prodi"]);
                    } else {
                        echo "Isi semua kolom!";
                    }
                    break;

                case 'tampil':
                    tampilkanTabelMahasiswa();
                    break;

                case 'perbarui':
                    if (isset($_POST["id"]) && isset($_POST["nama"]) && isset($_POST["nim"]) && isset($_POST["prodi"])) {
                        perbaruiData($_POST["id"], $_POST["nama"], $_POST["nim"], $_POST["prodi"]);
                    } else {
                        echo "Isi semua kolom!";
                    }
                    break;

                case 'hapus':
                    if (isset($_POST["id"])) {
                        hapusData($_POST["id"]);
                    } else {
                        echo "ID tidak valid!";
                    }
                    break;

                default:
                    echo 'Aksi tidak valid';
                    break;
            }
        }
    }
    ?>
    <!-- <div class="container col-4">
        <form method="post" action="">
            <h3 class="text-conter mt-4">Tambah Data</h3>

        </form>

    </div>
    <form method="post">
        <h3>Fungsi Menambahkan Data</h3>
        <input type="hidden" name="action" value="tambah">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>
        <label for="nim">NIM:</label>

        <input type="text" name="nim" required><br>
        <label for="prodi">Prodi:</label>
        <input type="text" name="prodi" required><br>
        <button type="submit">Tambah Data</button>
    </form>
    <br> -->