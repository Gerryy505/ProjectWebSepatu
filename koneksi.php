<?php
$host = "localhost";
$user = "root";       // Username default XAMPP/Laragon
$pass = "";           // Password default biasanya kosong
$db   = "tb_sepatu";

try {
    // Mengatur Data Source Name (DSN)
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    
    // Membuat instance PDO
    $pdo = new PDO($dsn, $user, $pass);
    
    // Mengatur mode error PDO ke Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Koneksi ke database berhasil (PDO)!";
} catch (PDOException $e) {
    // Jika gagal, tampilkan pesannya
    echo "Koneksi gagal: " . $e->getMessage();
}
?>