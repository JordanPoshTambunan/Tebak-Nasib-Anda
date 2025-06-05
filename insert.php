<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_user'];

    // Array gambar dari setiap kategori (1-10)
    $rumah = "rumah" . rand(1, 10) . ".jpg";
    $mobil = "mobil" . rand(1, 10) . ".jpg";
    $profesi = "profesi" . rand(1, 10) . ".jpg";
    $gaji = "gaji" . rand(1, 10) . ".jpg";
    $lokasi = "lokasi" . rand(1, 10) . ".jpg";

    // Simpan ke database
    $query = "INSERT INTO hasil_nasib (nama_user, rumah, mobil, profesi, gaji, lokasi_tinggal)
              VALUES ('$nama', '$rumah', '$mobil', '$profesi', '$gaji', '$lokasi')";

    if (mysqli_query($koneksi, $query)) {
        // Ambil ID terakhir
        $last_id = mysqli_insert_id($koneksi);
        header("Location: result.php?id=$last_id");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
