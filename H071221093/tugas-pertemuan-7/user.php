<?php
session_start();

require "dbController.php";
$data_mahasiswa = read();

if (!isset($_SESSION['login'])) {
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
</head>
<body>
<style>
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

        .btn {
            background-color: #d9534f;
            color: #fff;
            padding: 10px 20px;
            border: none;
            text-decoration: none;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #c9302c;
        }
    </style>
    <a href="logout.php"><button class="btn btn-danger">Log out</button></a>
    <h1>Selamat datang di halaman user, <?= $_SESSION["mahasiswa"]; ?></h1>
    <?php
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>nim</th>";
    echo "<th>nama</th>";
    echo "<th>prodi</th>";
    echo "</tr>";

    foreach ($data_mahasiswa as $row) {
        echo "<tr>";
        echo "<td>" . $row['nim'] . "</td>"; 
        echo "<td>" . $row['nama'] . "</td>"; 
        echo "<td>" . $row['prodi'] . "</td>"; 
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>