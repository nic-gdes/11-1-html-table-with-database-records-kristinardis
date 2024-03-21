<?php

$conn = new mysqli("db", "root", "root", "db");


if (mysqli_connect_errno()) {
    echo "Database error: " . mysqli_connect_error();
    exit();
}

