<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //menyimpan file json ke dalam ariable $file
                $file = "data.json";
                //memnggil variable $file dan menyimpan ke dalam variable $konten
                $konten = file_get_contents($file);
                //mengubah variable $konten menjadi array
                $data = json_decode($konten, true);
                foreach ($data as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $value['namaBarang'] . "</td>";
                    echo "<td>" . $value['jenis'] . "</td>";
                    echo "<td>" . $value['jumlah'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>