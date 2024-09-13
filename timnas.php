<?php
$timnas = [
    ["nama" => "Marteen Paes",
    "Lahir" => "14 Mei 1998",
    "Klub" => "FC Dallas",
    "gambar" => "paes.jpeg",
    ],
    ["nama" => "Pratama Arhan",
    "Lahir" => "21 Desember 2001",
    "Klub" => "Suwon",
    "gambar" => "arhan.jpeg",
    ],
    ["nama" => "Calvin Verdonk",
    "Lahir" => "26 April 1997",
    "Klub" => "Eredivisie",
    "gambar" => "calvin.jpeg",
    ],
    ["nama" => "Tom Haye",
    "Lahir" => "9 Februari 1995",
    "Klub" => "Heerenveen",
    "gambar" => "haye.jpeg",
    ],
    ["nama" => "Jay Idzes",
    "Lahir" => "2 Juni 2000",
    "Klub" => "Serie A",
    "gambar" => "jay.jpeg",
    ],
    ["nama" => "Justin Hubner",
    "Lahir" => "14 September 2003",
    "Klub" => "Wanderers",
    "gambar" => "justin.jpeg",
    ],
    ["nama" => "Marselino Ferdinan",
    "Lahir" => "9 September 2004",
    "Klub" => "Divisi Kedua Inggris Oxford",
    "gambar" => "marselino.jpeg",
    ],
    ["nama" => "Nathan Tjoe-A-On",
    "Lahir" => "22 Desember 2001",
    "Klub" => "Swansea City",
    "gambar" => "nathan.jpeg",
    ],
    ["nama" => "Rafael Struick",
    "Lahir" => "27 Maret 2003",
    "Klub" => "Eerste Divisie ADO Den Haag",
    "gambar" => "rafa.jpeg",
    ],
    ["nama" => "Ragnar Oratmangoen",
    "Lahir" => "21 Januari 1998",
    "Klub" => "Liga Pro Belgia Dender",
    "gambar" => "ragnar.jpeg",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemain Timnas Indonesia</title>
    <style>
        .gambar {
            height: 200px;
            width: 200px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1>Pemain Timnas Indonesia</h1>
    <?php foreach($timnas as $tim) : ?>
        <ul>
        <img class="gambar" src="img/<?= $tim["gambar"];?> ">    
        <li>Nama: <?= $tim["nama"]?> </li>
        <li>Lahir: <?= $tim["Lahir"]?> </li>
        <li>Klub: <?= $tim["Klub"]?> </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>