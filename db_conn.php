<?php  

$host = "localhost";
$dbname = "my_db";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}