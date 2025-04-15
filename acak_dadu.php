<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Acak Dadu</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 50px;
        }
        img {
            width: 150px;
            height: 150px;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>Acak Dadu</h1>

    <?php
        // Menghasilkan angka acak antara 1 dan 6
        $dadu = rand(1, 6);

        // Menentukan path gambar berdasarkan nama file (misal: 1.png, 2.png, dst.)
        $gambar = "img/{$dadu}.png"; // Gambar disimpan di folder 'img'
    ?>

    <!-- Menampilkan gambar dadu -->
    <img src="<?= $gambar ?>" alt="Dadu <?= $dadu ?>">

    <!-- Tombol untuk me-refresh halaman -->
    <br>
    <button onclick="window.location.reload();">Acak Lagi</button>

</body>
</html>
