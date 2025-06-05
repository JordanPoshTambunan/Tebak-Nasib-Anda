<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Fungsi acak gambar antara 1-10
    function acakGambar($folder, $prefix) {
        $nomor = rand(1, 10);
        return $prefix . $nomor . '.jpg';
    }

    $jenis_rumah = acakGambar('assets/rumah', 'rumah');
    $jenis_mobil = acakGambar('assets/mobil', 'mobil');
    $profesi = acakGambar('assets/profesi', 'profesi');
    $gaji = acakGambar('assets/gaji', 'gaji');
    $lokasi_tinggal = acakGambar('assets/lokasi', 'lokasi');

    // Update data nasib
    $query = "UPDATE hasil_nasib SET 
                jenis_rumah = '$jenis_rumah',
                jenis_mobil = '$jenis_mobil',
                profesi = '$profesi',
                gaji = '$gaji',
                lokasi_tinggal = '$lokasi_tinggal'
              WHERE id = $id";

    if (mysqli_query($koneksi, $query)) {
        header("Location: list.php");
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
} else {
    echo "Akses tidak valid.";
}
?>
