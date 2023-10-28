<?php

include("./config/Connection.php");

class LoginController extends Connection
{
    public function __construct($data)
    {
        parent::__construct();

        $username = $data['username'];
        $password = $data['password'];

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['prodi'] = $row['prodi'];
                $_SESSION['status'] = 'login';

                if ($row['role'] == 'mahasiswa') {
                    header("Location: dashboard/index.php?message=Selamat datang kak");
                } else {
                    header("Location: dashboard/index.php?message=Selamat datang");
                }
            }
            return;
        } else {
            header("Location: ?message=Password salah!");
            return;
        }
    }
}
