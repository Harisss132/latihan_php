<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>
    <div class="container md-3 mt-5" style="width: 700px;">
        <h1 class="text-center">FORM DATA MAHASIWA</h1>
        <hr>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div> <label for="nama">Nama :</label>
                <input class="form-control" name="nama" id="nama" type="text" placeholder="Masukan Nama" aria-label="default input example">
            </div>
            <div> <label for="nim">NIM :</label>
                <input class="form-control" name="NIM" id="nim" type="text" placeholder="Masukan NIM " aria-label="default input example">
            </div>
            <div><label for="matkul">MATA KULIAH :</label>
                <select class="form-select form-select-sm" aria-label="Small select example" name="matkul" id="matkul">
                    <option selected>Mata Kuliah</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Struktur Data">Struktur Data</option>
                    <option value="Algoritma dan Pemrograman">Algoritma dan Pemrograman</option>
                </select>
            </div>
            <div><label for="jeniskelamin">Jenis Kelamin :</label>
                <div class="from-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="laki" value="laki-laki">
                    <label class="form-check-label" for="laki">
                        Laki-laki
                    </label>
                </div>
                <div class="from-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="prempuan" value="prempuan">
                    <label class="form-check-label" for="prempuan">
                        prempuan
                    </label>
                </div>
            </div>
            <div>
                <label for="nUTS">Nilai UTS : </label>
                <input class="form-control" type="number" name="nUTS" id="nUTS">
            </div>
            <div>
                <label for="nUAS">Nilai UAS : </label>
                <input class="form-control" type="number" name="nUAS" id="nUAS">
            </div>
            <div>
                <label for="nTugas">Nilai Tugas : </label>
                <input class="form-control" type="number" name="nTugas" id="nTugas">
            </div><br>
            <input class="btn btn-primary" type="submit" value="kirim">
        </form>
    </div>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['NIM'];
    $matkul = $_POST['matkul'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $nUts = $_POST['nUTS'];
    $nUas = $_POST['nUAS'];
    $nTugas = $_POST['nTugas'];
    $total = ($nUts + $nUas + $nTugas) / 3;

    if ($nama == "") {
        echo "Nama harus di isi!!";
    } elseif ($nim == "") {
        echo "NIM harus di isi!!";
    } elseif ($matkul == "") {
        echo "Matkul harus di isi!!";
    } elseif ($jeniskelamin == "") {
        echo "Jenis Kelamin harus di isi!!";
    } elseif ($nUts == "") {
        echo "Nilai harus di isi!!";
    } elseif ($nUas == "") {
        echo "Nilai harus di isi!!";
    } elseif ($nTugas == "") {
        echo "Nilai harus di isi!!";
    } else {
        echo "<br><h2 class='text-center'>INI ADALAH HASILNYA </h2>";
        echo "<h5 class='text-center'>Wellcome, $nama </h5>";
        echo "<h5 class='text-center'>NIM kamu adalah :$nim </h5>";
        echo "<h5 class='text-center'>Matkul yang kamu :$matkul </h5>";
        echo "<h5 class='text-center'>Jenis Kelamin :$jeniskelamin </h5>";
        echo "<h5 class='text-center'>Nilai UTS kamu :$nUts </h5>";
        echo "<h5 class='text-center'>Nila UAS kamu :$nUas </h5>";
        echo "<h5 class='text-center'>Nilai Tugas Kamu :$nTugas </h5>";
        echo "<h5 class='text-center'>Hasil semua nilai kamu: $total</h5>";
        $n = $total;
        switch ($n) {
            case $n >= 90:
                echo "<h5 class='text-center'>Kamu Mendapatkan Grade A </h5>";
                break;
            case $n >= 80:
                echo "<h5 class='text-center'>Kamu Mendapatkan Grade B </h5>";
                break;
            case $n >= 70:
                echo "<h5 class='text-center'>Kamu Mendapatkan Grade C </h5>";
                break;
            case $n >= 60:
                echo "<h5 class='text-center'>Kamu Mendapatkan Grade D </h5>";
                break;
            default:
                echo "<h5 class='text-center'>Kamu Mendapatkan Grade E </h5>";
                break;
        }
    }
}
?>