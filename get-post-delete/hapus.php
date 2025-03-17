<?php
//menyimpan file json ke dalam variable $file
$file = "data.json";
//memanggil variable $file dan menyimpan ke dalam variable $konten
$konten = file_get_contents($file);
//mengubah variable $konten menjadi array
$data = json_decode($konten, true);

if (isset($_GET['id'])) {
    $idtodelete = $_GET['id'];
    foreach ($data as $key => $value) {
        if ($value['id'] === $idtodelete) {
            unset($data[$key]);
            break;
        }
    }

    $data = array_values($data);
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
    echo "<script>
            alert('Data berhasil dihapus!');
            window.location.href= 'bacadata.php';
          </script>";
    exit();
} else {
    echo "<script>
            alert('ID Tidak ditemukan!');
            window.location.href= 'bacadata.php';
          </script>";
    exit();
}
