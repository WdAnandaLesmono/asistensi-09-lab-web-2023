<?php

include("./config/Connection.php");

class LoginAdmin extends Connection
{
    public function __construct($data)
    {
        parent::__construct();

        $username = $data['admin_username'];
        $password = $data['admin_password'];

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['status'] = 'login';

                if ($row['role'] == 'admin') {
                    header("Location: dashboard/index-admin.php?message=Selamat datang admin");
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
