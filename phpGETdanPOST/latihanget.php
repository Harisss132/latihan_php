<?php
$mahasiswa =
    [
        [
            "nrp" => "3275674077812",
            "nama" => "Ahmad Mustofa",
            "email" => "ahmadmustofa@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nrp" => "3275674899765",
            "nama" => "Ahmad Kemalnutz",
            "email" => "nutzkemal@gmail.com",
            "jurusan" => "Sistem Informatika"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li>
                <a href="latihanget1.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs['jurusan'];?>">
                    <?= $mhs ["nama"];?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>