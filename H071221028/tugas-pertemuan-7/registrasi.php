<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require_once('./css_bootsrap.php')
    ?>
    <title>Formulir Pendaftaran Pengguna</title>

</head>

<body>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $role = $_POST["role"];

        $server = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "db_mahasiswa";

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Cek apakah username sudah ada
        $check_query = "SELECT * FROM users WHERE username = ?"; //String ini dipke untuk ambil semua kolom di tabel "users" di mana nilai kolom "username" sama dengan parameter yang akan diikat nanti. Tanda tanya (?) adalah tanda tanya parameter yang akan diikat nilainya kemudian.
        $check_statement = $conn->prepare($check_query); // untuk menyiapkan  pernyataan SQL sebelum eksekusi ke database.
        $check_statement->bind_param("s", $username);  //untuk ikat nilai parameter ke pernyataan SQL yang telah ada sebelumnya.
        $check_statement->execute();  //u eksekusi pernyataan yg sdh ada stlh itu database akan menjalankan query yang mengambil data dari tabel "users" berdasarkan username yang diberikan.
        $result = $check_statement->get_result(); //setelah dijalankan disimpan di $result dan diambil hasilnya pke get result

        if ($result->num_rows > 0) {
            echo "Username sudah ada. Pilih username lain.";
        } else {
            // Gunakan prepared statement untuk query INSERT
            $insert_query = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)"; //untuk lakukan operasi INSERT pada tabel "users" dalam database. (?) sebagai tanda tempat parameter akan diikat nanti.
            $insert_statement = $conn->prepare($insert_query);
            $insert_statement->bind_param("sss", $username, $password, $role);

            if ($insert_statement->execute()) {
                echo "Pendaftaran berhasil!";
            } else {
                echo "Error: " . $insert_statement->error;
            }
        }

        $check_statement->close();
        $insert_statement->close();
        $conn->close();
    }
    ?>

    <div class="container col-4">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validateForm()">

            <h1 style="text-align: center">Register Form</h1>
            <h3 class="text-conter mt-4">SILAHKAN REGISTERASI</h3>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="username" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="mb-3">
                                <label for="role" class="form-label">Peran:</label>
                                <select id="role" name="role" class="form-select" required>
                                    <option value="admin">Admin</option>
                                    <option value="mahasiswa">Mahasiswa</option>
                                </select>
                            </div>

            <div class="container">
                
                <button style="margin-top: 38px;" type="submit" class=" btn btn-primary" name="submit">Daftar</button>
            </div>
            <br>
        </form>
        <p>Sudah punya akun?
            <a href="login.php">Login Di Sini</a>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;

            if (password != confirm_password) {
                alert("Konfirmasi password salah!");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>