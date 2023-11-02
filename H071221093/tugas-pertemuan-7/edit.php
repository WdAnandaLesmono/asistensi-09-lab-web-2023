<!-- Edit Data -->
<?php 
session_start();
if (!isset($_SESSION["login_admin"])) {
    header("Location: login.php");
    exit;
}
require 'dbController.php';

// ambil data di URL
$nim = $_GET["nim"];

// query data mahasiswa berdaasarkan nim
$read = read();

foreach ($read as $value) {
    if ($value['nim'] == $nim) {
        $mhs = $value;
    }   
}

// cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"]) ) {

        // cek apakah data berhasil diubah atau tidak
        if(edit($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'admin.php';
                </script>
            ";
        } else {
            echo "
                <script> 
                    alert('Data Gagal Diubah');
                    document.location.href = 'admin.php';
                </script>
            ";
        }

    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
        }

        .insert-content {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 50%;
            margin: 0 auto;
            margin-top: 50px;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #337ab7;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #286090;
        }
    </style>
    <center>
        <div id="insert-content" class="insert-content">
            <h1>Edit Data Mahasiswa <?= $mhs['nim']?></h1>
            <form action="" method="post">
                <input type="hidden" name="target" value="<?= $mhs["nim"]; ?>">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
                <br><br>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"];?>">
                <br><br>
                <label for="prodi">prodi : </label>
                <input type="text" name="prodi" id="prodi" required value="<?= $mhs["prodi"];?>">
                <br><br>
                <button type="submit" name="submit">Edit Data!</button>
                <br><br>
            </form>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>