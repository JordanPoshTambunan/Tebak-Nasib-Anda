<?php
include 'db.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id === 0) {
    echo "ID tidak valid.";
    exit();
}

$query = "SELECT * FROM hasil_nasib WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Tebakan Nasib</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .hasil-container {
            text-align: center;
            padding: 20px;
        }
        .hasil-container h2 {
            margin-bottom: 30px;
        }
        .hasil-box {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .hasil-item {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 12px;
            background-color: #f7f7f7;
            width: 200px;
        }
        .hasil-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .hasil-label {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="hasil-container">
        <h2>Halo, <?= htmlspecialchars($data['nama_user']) ?>! Ini adalah nasibmu 😄</h2>
        <div class="hasil-box">
            <div class="hasil-item">
                <img src="assets/rumah/<?= htmlspecialchars($data['rumah']) ?>" alt="Rumah">
                <div class="hasil-label">Rumah</div>
            </div>
            <div class="hasil-item">
                <img src="assets/mobil/<?= htmlspecialchars($data['mobil']) ?>" alt="Mobil">
                <div class="hasil-label">Mobil</div>
            </div>
            <div class="hasil-item">
                <img src="assets/profesi/<?= htmlspecialchars($data['profesi']) ?>" alt="Profesi">
                <div class="hasil-label">Profesi</div>
            </div>
            <div class="hasil-item">
                <img src="assets/gaji/<?= htmlspecialchars($data['gaji']) ?>" alt="Gaji">
                <div class="hasil-label">Gaji</div>
            </div>
            <div class="hasil-item">
                <img src="assets/lokasi/<?= htmlspecialchars($data['lokasi_tinggal']) ?>" alt="Lokasi">
                <div class="hasil-label">Lokasi</div>
            </div>
        </div>
        <br>
        <a href="index.php">🔁 Coba Lagi</a> | 
        <a href="list.php">📋 Lihat Semua Data</a>
    </div>
</body>
</html>
