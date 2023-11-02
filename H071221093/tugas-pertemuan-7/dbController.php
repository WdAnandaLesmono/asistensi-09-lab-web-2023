<?php
$connect = mysqli_connect("localhost", "root", "", "prakWeb7");

function read(){
    $query_read = "SELECT * FROM data_mahasiswa";
    global $connect;
    $result = mysqli_query($connect, $query_read);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
// Fungsi untuk hapus data
function delete($nim) {
    global $connect;
    mysqli_query($connect, "DELETE FROM data_mahasiswa WHERE nim = '$nim'");
    mysqli_query($connect, "DELETE FROM user WHERE username = '$nim'");
    return mysqli_affected_rows($connect);
}

function edit($data) {
    global $connect;
    // ambil data dari tiap elemen dalam from
    $target = $data["target"]; 
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $prodi = htmlspecialchars($data["prodi"]);

    // query edit data
    $query = "UPDATE data_mahasiswa SET 
                nama = '$nama',
                nim = '$nim',
                prodi = '$prodi'
            WHERE nim = '$target'
            ";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function regist($data){
    global $connect;
    $username = $data['username'];
    $password = $data['password'];
    $confirm_password = $data['confirm_password'];

    $check_username = mysqli_query($connect, "SELECT username FROM user WHERE username = '$username'");
    $check_nim = mysqli_query($connect, "SELECT nim FROM data_mahasiswa WHERE nim = '$username'");

    if (mysqli_fetch_assoc($check_username)) {
        echo "<script>
                alert('Username Sudah Terdaftar!')
            </script>";
            return false;
    }

    if (!isset(mysqli_fetch_assoc($check_nim)['nim'])) {
        echo "<script>
                alert('Anda Tidak Terdaftar!')
            </script>";
            return false;
    }

    if ($password == $confirm_password) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($connect, "INSERT INTO user VALUES('$username', '$password')");
        return mysqli_affected_rows($connect);
    }

}

function insert($data){
    global $connect;
    $nama = $data['nama'];
    $nim = $data['nim'];
    $prodi = $data['prodi'];
    $check_nim = mysqli_query($connect, "SELECT nim FROM data_mahasiswa WHERE nim = '$nim'");

    
    if (null !== mysqli_fetch_assoc($check_nim)) {
        echo "<script>
            alert('Data sudah ada!')
        </script>";
        return false;
    } else {
        mysqli_query($connect, "INSERT INTO data_mahasiswa VALUES('$nim', '$nama', '$prodi')");
        return mysqli_affected_rows($connect);
    }



}


?>