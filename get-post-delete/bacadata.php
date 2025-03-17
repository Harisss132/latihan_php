<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-2">DATA BARANG</h1>
    <div class="container mt-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData" style="width: 150px;">Tambah</button>
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Barang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="aksi.php" method="POST">
                            <div class="mb-3">
                                <label for="namabarang" class="col-form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="namabarang" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenisbarang" class="col-form-label">Jenis Barang</label>
                                <select class="form-select" aria-label="Default select example" id="jenisbarang" name="jenis" required>
                                    <option selected disabled>pilih salah satu</option>
                                    <option value="Perabotan">Perabotan</option>
                                    <option value="Elektronik">Elektronik</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jumlahbarang" class="col-form-label">Jumlah</label>
                                <input type="number" class="form-control" id="jumlahbarang" name="jumlah" required>
                            </div>
                            <input type="submit" class="btn btn-primary" value="kirim" style="float: right;"></input>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="card">
            <table class="table table-bordered mt-2">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //menyimpan file json ke dalam variable $file
                    $file = "data.json";
                    //memanggil variable $file dan menyimpan ke dalam variable $konten
                    $konten = file_get_contents($file);
                    //mengubah variable $konten menjadi array
                    $data = json_decode($konten, true);

                    foreach ($data as $key => $value) {
                        $Number = $key + 1;
                        echo "<tr>";
                        echo "<td>" . $Number . "</td>";
                        echo "<td>" . $value['nama'] . "</td>";
                        echo "<td>" . $value['jenis'] . "</td>";
                        echo "<td>" . $value['jumlah'] . "</td>";echo "<td>
                        <a href='hapus.php?id=" . $value['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>
                        <a href='ubah.php?id=" . $key . "' class='btn btn-warning btn-sm'>Ubah</a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>