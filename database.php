<?php

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli->connect_errno){
    die("connect error: ".$mysqli->connect_errro);

}
return $mysqli;