<?php
include 'db.php';

$query = "SELECT * FROM hasil_nasib ORDER BY id DESC";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nasib Semua User</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .list-container {
            padding: 20px;
        }
        .nasib-card {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }
        .nasib-item {
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 220px;
            padding: 15px;
            text-align: center;
            background-color: #f2f2f2;
        }
        .nasib-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 5px;
        }
        .nama-user {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .kategori-label {
            font-size: 13px;
            margin-top: 4px;
        }
    </style>
</head>
<body>

<div class="list-container">
    <h2>Daftar Semua Nasib Pengguna</h2>

    <div class="nasib-card">
        <?php while ($data = mysqli_fetch_assoc($result)) : ?>
            <div class="nasib-item">
                <div class="nama-user"><?= htmlspecialchars($data['nama_user']) ?></div>

                <img src="assets/rumah/<?= $data['rumah'] ?>" alt="Rumah">
                <div class="kategori-label">Rumah</div>

                <img src="assets/mobil/<?= $data['mobil'] ?>" alt="Mobil">
                <div class="kategori-label">Mobil</div>

                <img src="assets/profesi/<?= $data['profesi'] ?>" alt="Profesi">
                <div class="kategori-label">Profesi</div>

                <img src="assets/gaji/<?= $data['gaji'] ?>" alt="Gaji">
                <div class="kategori-label">Gaji</div>

                <img src="assets/lokasi/<?= $data['lokasi_tinggal'] ?>" alt="Lokasi">
                <div class="kategori-label">Lokasi</div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

</body>
</html>
