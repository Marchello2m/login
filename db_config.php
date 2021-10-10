<?php

$host= "127.0.0.1";
$username= "";//login
$password = "";//parole

$db_name = "login_system";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}