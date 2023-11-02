<?php
$connect = mysqli_connect("localhost", "root", "", "prakWeb7");

$query_insert = mysqli_query($conn, "INSERT INTO users VALUES('$username', '$password')");



?>