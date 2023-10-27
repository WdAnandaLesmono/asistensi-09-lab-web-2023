<?php 
session_start();
if (!isset($_SESSION["login_admin"])) {
    header("Location: login.php");
    exit;
}
require 'dbController.php';

$nim = $_GET["nim"];

if(delete($nim) > 0 ) {
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'admin.php';
        </script>
    ";
} else {
    echo "
        <script> 
            alert('Data Gagal Dihapus');
            document.location.href = 'admin.php';
        </script>
    ";
}

?>