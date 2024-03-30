<?php
$host = 'localhost';
$dbname = 'tes_oshs';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Gagal terkoneksi ke database " . $e->getMessage();
    die();
}
