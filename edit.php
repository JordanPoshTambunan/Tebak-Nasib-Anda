<?php
include 'db.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit;
}

$id = $_GET['id'];
$query = "SELECT * FROM hasil_nasib WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Nasib</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .edit-container {
            max-width: 500px;
            margin: 40px auto;
            text-align: center;
        }
        .nasib-preview img {
            width: 100px;
            margin: 10px;
            border-radius: 10px;
        }
        .btn-random {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="edit-container">
    <h2>Edit Nasib untuk <?= htmlspecialchars($data['nama_user']) ?></h2>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <div class="nasib-preview">
            <p>Gambar Sekarang:</p>
            <div>
                <img src="assets/rumah/<?= $data['jenis_rumah'] ?>" alt="Rumah">
                <img src="assets/mobil/<?= $data['jenis_mobil'] ?>" alt="Mobil">
                <img src="assets/profesi/<?= $data['profesi'] ?>" alt="Profesi">
                <img src="assets/gaji/<?= $data['gaji'] ?>" alt="Gaji">
                <img src="assets/lokasi/<?= $data['lokasi_tinggal'] ?>" alt="Lokasi">
            </div>
        </div>

        <p>Klik tombol di bawah ini untuk mengganti nasib secara acak:</p>

        <button type="submit" class="btn-random">Acak Nasib Baru</button>
    </form>
</div>

</body>
</html>
