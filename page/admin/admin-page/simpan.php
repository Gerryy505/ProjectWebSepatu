<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

$host = 'localhost';
$db   = 'tb_sepatu';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (!$input) {
        echo json_encode(['status' => 'error', 'message' => 'Data tidak valid']);
        exit;
    }
    
    $nama = trim($input['nama'] ?? '');
    $harga = trim($input['harga'] ?? '');
    $alamat = trim($input['alamat'] ?? '');
    $kategori = trim($input['kategori'] ?? '');
    $ukuran = trim($input['ukuran'] ?? '');
    
    if (empty($nama) || empty($harga) || empty($alamat) || empty($kategori) || empty($ukuran)) {
        echo json_encode(['status' => 'error', 'message' => 'Semua field wajib diisi']);
        exit;
    }
    
    $pdo = new PDO($dsn, $user, $pass, $options);
    $stmt = $pdo->prepare("INSERT INTO sepatu (nama, harga, alamat, kategori, ukuran) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nama, $harga, $alamat, $kategori, $ukuran]);
    
    echo json_encode(['status' => 'success', 'message' => 'Data berhasil disimpan!']);
    
} catch (Exception $e) {
    error_log($e->getMessage());
    echo json_encode(['status' => 'error', 'message' => 'Terjadi kesalahan saat menyimpan data.']);
}
?>