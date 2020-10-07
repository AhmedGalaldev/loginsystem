<?php

$serverName = 'localhost';
$username = 'root';
$password = 'agh1993agh';
$databaseName = 'loginsystem';

$conn = mysqli_connect($serverName, $username, $password, $databaseName);


if (!$conn) {
    die("The connection failded :( " . mysqli_connect_error());
}
