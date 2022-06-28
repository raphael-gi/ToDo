<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tonew";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Verbindung misslungen: " . mysqli_connect_error());
}