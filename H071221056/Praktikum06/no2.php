<!DOCTYPE html>
<html>
<head>
    <title>Formulir Perkenalan</title>
</head>
<body>

<h1>Formulir Perkenalan</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br><br>


    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br><br>



    <label for="bahasa[]">Bahasa Pemrograman yang Dikuasai:</label><br>
    <input type="checkbox" name="bahasa[]" value="JAVA"> JAVA
    <input type="checkbox" name="bahasa[]" value="Python"> Python
    <input type="checkbox" name="bahasa[]" value="HTML"> HTML
    <input type="checkbox" name="bahasa[]" value="CSS"> CSS
    <input type="checkbox" name="bahasa[]" value="JavaScript"> JavaScript
    <input type="checkbox" name="bahasa[]" value="PHP"> PHP
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    // $umur = $_POST["umur"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $umur = date ("Y") - date("Y", strtotime($_POST["tanggal_lahir"]));
    $email = $_POST["email"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $bahasa = isset($_POST["bahasa"]) ? $_POST["bahasa"] : [];
    
    $tanggal_lahir = date("d F Y", strtotime($tanggal_lahir));

    $perkenalan = "Halo, nama saya $nama, saya berumur $umur tahun, saya lahir pada $tanggal_lahir, saya berjenis kelamin $jenis_kelamin, email saya $email ";

    if (!empty($bahasa)) {
        $perkenalan .= "dan saat ini saya berhasil menguasai bahasa pemrograman " . implode(", ", $bahasa);
    } else {
        $perkenalan .= "dan saat ini saya belum menguasai bahasa pemrograman apapun.";
    }
    echo "<p>$perkenalan</p>";
}
?>
</body>
</html>