<?php
//$conn=mysqli_connect("127.0.0.1", "root","","RESIDENCIASSEGUIMIENTO");
$mysqli = new mysqli("localhost", "root", "", "RESIDENCIASSEGUIMIENTO");

//mysqli_set_charset($conn,"utf8");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



?>