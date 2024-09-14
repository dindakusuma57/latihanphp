<?php
    if( !isset($_GET["nama"]) ||
        !isset($_GET["Lahir"]) ||
        !isset($_GET["Klub"]) ||
        !isset($_GET["gambar"]) ) {
        header("Location:lat1.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemain</title>
    <style>
        .gambar {
            height: 200px;
            width: 200px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    
<ul>
    <img class="gambar" src="img/<?= trim($_GET["gambar"]); ?>">
    <li><?= $_GET["nama"];?></li>
    <li><?= $_GET["Lahir"];?></li>
    <li><?= $_GET["Klub"];?></li>
</ul>

<a href="lat1.php">Kembali ke halaman sebelumnya</a>

</body>
</html>