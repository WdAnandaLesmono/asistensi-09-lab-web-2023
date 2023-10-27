<?php
require_once('../function/helper.php');
require_once('../function/koneksi.php');
$_SESSION = [];
session_destroy();
header("location: " . BASE_URL . 'index.php');