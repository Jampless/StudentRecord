<?php

$server = 'localhost';
$Email = 'root';
$Password = '';
$database = 'studrec';

$conn = mysqli_connect($server, $Email, $Password, $database);

if (!$conn) {
    die ( "<script> alert('Connection Failed') </script>" );
}

?>