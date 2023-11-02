<?php
session_start();
require "dbController.php";

$data_mahasiswa = read();

if (!isset($_SESSION['login_admin'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<style>
        /* Tambahkan CSS styling di sini */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-danger {
            background-color: #d9534f;
            color: #fff;
            padding: 5px 10px;
            border: none;
            text-decoration: none;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }

        .delete-link, .edit-link {
            text-decoration: none;
            margin-right: 10px;
        }
    </style>

    <h1>selamat datang di halaman admin</h1>
    <a href="logout.php"><button class="btn btn-danger">Log out</button></a>

    <table border="2">
        <tr>
            <th>nim</th>
            <th>nama</th>
            <th>prodi</th>
            <th>modifikasi</th>
        </tr>

        <?php foreach ($data_mahasiswa as $row) : ?>
        <tr>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['prodi'] ?></td>
            <td>
                <a href="delete.php?nim=<?= $row['nim'];?>" onclick="return confirm('yakin ingin menghapus?');">delete</a>
                <a href="edit.php?nim=<?= $row['nim'];?>" onclick="">edit</a>
            </td>
        </tr>
        <?php endforeach;?>

    </table>
    <a href="insert.php"><button class="btn btn-primary">Insert Data</button></a>

</body>
</html>