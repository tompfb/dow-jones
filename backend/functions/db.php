<?php
class connectDB
{
    // public $conn;
    // private $hostName = "localhost";
    // private $userName = "u6tmuonqdz3n5";
    // private $password = "xn--82cxobb3c8ad5ac3f7c7gxd4b.net";
    // private $dbName = "dbnocjlnnpbps8";

    public $conn;
    private $hostName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "blog";

    function __construct()
    {
        $this->conn = new mysqli($this->hostName, $this->userName, $this->password, $this->dbName);
        $this->conn->set_charset("utf8");
        if (!$this->conn) {
            die("Connection failed" . mysqli_connect_error());
        }
    }
}
