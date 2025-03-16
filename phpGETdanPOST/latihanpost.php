<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-3 md-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="namaBarang" class="col-form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="namaBarang" name="namaBarang">
                            </div>
                            <div class="mb-3">
                                <label for="jenisBarang" class="col-form-label">Jenis Barang</label>
                                <select class="form-select" aria-label="Default select example" id="jenisBarang" name="jenisBarang">
                                    <option value="Alat Tulis">Alat Tulis</option>
                                    <option value="Elektronik">Elektronik</option>
                                    <option value="Perabotan">Perabotan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jumlahBarang" class="col-form-label">Jumlah Barang</label>
                                <input type="number" class="form-control" id="jumlahBarang" name="jumlahBarang"></input>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-2">
            <table class="table table-bordered">
                <thead>
                    <tr class="table table-dark">
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th>Jumlah Barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Membaca file JSON
                    $json_data = file_get_contents('data.json');
                    $barang = json_decode($json_data, true);

                    // Menangani data yang dikirimkan dari form
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $namaBarang = $_POST['namaBarang'];
                        $jenisBarang = $_POST['jenisBarang'];
                        $jumlahBarang = $_POST['jumlahBarang'];

                        // Menambahkan data baru ke array barang
                        $barang[] = [
                            'nama' => $namaBarang,
                            'jenis' => $jenisBarang,
                            'jumlah' => $jumlahBarang
                        ];

                        // Menyimpan data kembali ke file JSON
                        file_put_contents('data.json', json_encode($barang, JSON_PRETTY_PRINT));

                        // Redirect untuk mencegah form resubmission
                        header("Location: " . $_SERVER['PHP_SELF']);
                        exit;
                    }

                    // Menampilkan data dalam tabel
                    $no = 1;
                    foreach ($barang as $item) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $item['nama'] . "</td>";
                        echo "<td>" . $item['jenis'] . "</td>";
                        echo "<td>" . $item['jumlah'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>