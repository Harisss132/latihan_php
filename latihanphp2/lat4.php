<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form Handling</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        Name : <br>
        <input type="text" name="nama" placeholder="Masukan Nama Anda"><br>
        Nilai MTK: <br>
        <input type="number" name="Nmtk" ><br>
        Nilai IPA: <br>
        <input type="number" name="Nipa" ><br>
        Nilai Bahasa Inggris: <br>
        <input type="number" name="Ninggris" ><br><br>
        <input type="submit" value="kirim"><br>
    </form>
</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama = $_POST ['nama'];
    $nMTK = $_POST ['Nmtk'];
    $nIPA = $_POST ['Nipa'];
    $nInggris = $_POST ['Ninggris'];

    if($nama == ""){
        echo "Nama harus di isi!!";
    } elseif($nMTK == "") {
        echo "Nilai harus di isi!!";
    } elseif($nIPA == "") {
        echo "Nilai harus di isi!!";
    } elseif($nInggris == "") {
        echo "Nilai harus di isi!!";
    }
    else{
        echo "<br>Wellcome, " .$nama;
        echo "<br>nilai MTK KAMU : " .$nMTK;
        echo "<br>nilai IPA KAMU : " .$nIPA;
        echo "<br>nilai Bahasa Inggris KAMU : " .$nInggris;
        echo "<br>total nilai yang kamu peroleh :" .$nMTK + $nIPA + $nInggris;
    }

}

?>