<?php

require "connection.php";
// session_start();
class LoginHelper extends Connection
{

    public $data;

    public function __construct($user)
    {
        parent::__construct();

        $username = $user['username'];
        $password = $user['password'];

        $query = "SELECT * FROM user WHERE username = '$username'";
        $query2 = "SELECT * FROM data_mahasiswa WHERE nim = '$username'";
        $result = mysqli_query($this->connect, $query);
        $result2 = mysqli_query($this->connect, $query2);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $row2 = mysqli_fetch_assoc($result2);
            
            
            if (password_verify($password, $row['password'])) {
                if ($username == "admin") {
                    $_SESSION["admin"] = $row["username"];
                    header("Location: admin.php");
                    $_SESSION['login_admin'] = true;
                }else{
                    $_SESSION["mahasiswa"] = $row2["nama"];
                    header("Location: user.php");
                    $_SESSION['login'] = true;
                }
            } else {
                echo "<script> alert('Wrong Password') </script>";
            }
            return;
        }
        echo "<script> alert('Wrong Username') </script>";
    }
}
