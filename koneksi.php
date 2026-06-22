<?php
// koneksi.php

$host     = "localhost";
$username = "root";
$password = "";
$database = "db_uas_pbo_ti1c_lusi_anitasari";

// Membuat koneksi database menggunakan pendekatan OOP (MySQLi)
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>