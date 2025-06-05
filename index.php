<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tebak Nasib</title>
    <link rel="stylesheet" href="style.css">
    <script src="validasi.js"></script>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Tebak Nasib 🔮</h1>
        <p>Masukkan namamu untuk melihat nasibmu di masa depan!</p>
        <form name="formTebak" action="insert.php" method="POST" onsubmit="return validateForm();">
            <label for="nama_user">Nama:</label>
            <input type="text" id="nama_user" name="nama_user" placeholder="Masukkan nama lengkapmu">
            <br><br>
            <input type="submit" value="Tebak Sekarang!">
        </form>
        <br>
        <a href="list.php">📋 Lihat Semua Hasil</a>
    </div>
</body>
</html>
