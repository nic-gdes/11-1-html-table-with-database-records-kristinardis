<?php

//$conn = new mysqli("db", "root", "root", "db");
$conn = mysqli_connect("mysql.server297.com:3308","2024kmcilvenna","kmcilvenna939", "welearnd_gdes261_2024_kmcilvenna");

if (mysqli_connect_errno()) {
    echo "Database error: " . mysqli_connect_error();
    exit();
}

