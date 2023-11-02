<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require_once('./css_bootsrap.php')
    ?>
    <title>Formulir Masuk</title>
</head>

<body>


    <?php
    session_start();
    if (isset($_SESSION["username"])) {
        if ($_SESSION["role"] == "admin") {
            header("Location: halaman_admin.php");
            exit();
        } elseif ($_SESSION["role"] == "mahasiswa") {
            header("Location: halaman_mahasiswa.php");
            exit();
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"]; // Tambahkan ini

        // Saring data pengguna dari database dan verifikasi kata sandi
        $server = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "db_mahasiswa";

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Sesuaikan kueri berdasarkan peran yang dipilih
        $sql = "SELECT username, password FROM users WHERE username='$username' AND role='$role'";
        $result = $conn->query($sql); //untuk jalankan pernyataan SQL terhadap koneksi database yang sudah dibuat ($conn).

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc(); //u ambil satu baris data dari hasil query dan disimpan dalam variabel $row dalam bentuk array asosiatif 

            if (password_verify($password, $row["password"])) {
                $_SESSION["username"] = $username;
                $_SESSION["role"] = $role;

                // Sesuaikan pengalihan berdasarkan peran
                if ($role == "admin") {
                    header("Location: halaman_admin.php");
                } elseif ($role == "mahasiswa") {
                    header("Location: halaman_mahasiswa.php");
                } else {
                    echo "Autentikasi gagal. Peran tidak valid.";
                }

                exit();
            } else {
                echo "Autentikasi gagal. Silakan coba lagi.";
            }
        } else {
            echo "Autentikasi gagal. Silakan coba lagi.";
        }
        $conn->close();
    }
    ?>
    <div class="container col-4">
        <form method="post" action="">
            <h1 style="text-align: center">LogIn Form</h1>
            <h3 class="text-conter mt-4">SILAHKAN LOGIN</h3>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="username" required>
            </div>
            
            <div class="mb-3">
                                <label for="role" class="form-label">Peran:</label>
                                <select id="role" name="role" class="form-select" required>
                                    <option value="admin">Admin</option>
                                    <option value="mahasiswa">Mahasiswa</option>
                                </select>
                            </div>
                <button style="margin-top: 38px;" type="submit" class=" btn btn-primary" name="submit">Daftar</button>
            </div>

    </div>


</body>

</html>