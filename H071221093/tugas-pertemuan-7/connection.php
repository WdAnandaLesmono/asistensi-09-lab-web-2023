<?php
session_start();

define("DB_NAME", "prakWeb7");
define("DB_HOSTNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");

class Connection
{
    public $connect;

    public function __construct()
    {
        $this->connect = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
        mysqli_select_db($this->connect, DB_NAME);

    }
}
