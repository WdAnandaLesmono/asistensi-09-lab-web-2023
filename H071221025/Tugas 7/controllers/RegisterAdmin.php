<?php
include("./config/Connection.php");

class RegisterAdmin extends Connection
{
    public function __construct($data)
    {
        parent::__construct();

        if (isset($data['admin_username']) && isset($data['admin_password']) && isset($data['confirmPassword'])) {
            $username = $data['admin_username'];
            $password = $data['admin_password'];
            $confirmPassword = $data['confirmPassword'];


            $query = "SELECT * FROM user WHERE username = '$username'";

            $result = mysqli_query($this->connect, $query);
            if (mysqli_num_rows($result) > 0) {
                echo "<script>alert('Username sudah terdaftar!')</script>";
                // No need to return here
            } else {
                if ($password == $confirmPassword) {
                    $query = "INSERT INTO user VALUES ('', '$username', '$password', 'admin')";
                    $result = mysqli_query($this->connect, $query);

                    header("Location: dashboard/index-admin.php?message=Berhasil mendaftar!");
                } else {
                    echo "<script>alert('Konfirmasi password tidak sesuai!')</script>";
                }
            }
        } else {
            echo "<script>alert('Data tidak lengkap!')</script>";
        }
    }
}

?>