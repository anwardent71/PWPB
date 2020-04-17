<?php
Class dbObj {
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "restapi";
    var $conn;
    function getConnstring() {
        $con = mysqli_connect( $this->servername, $this->username,
        $this->password, $this->dbname) or
        die("Connection Failed: " . mysqli_connect_error());
        //Check Koneksi database//
        if (mysqli_connect_errno()) {
            printf("Connection Failed: %s\n", mysqli_connect_error());
            exit();
        }else{
            $this->conn = $con;
        }
        return $this->conn;
    }
}
?>