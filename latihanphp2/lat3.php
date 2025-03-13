<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        Name : <br>
        <input type="text" name="nama" placeholder="Masukan Nama Anda"><br>
        E-mail: <br>
        <input type="text" name="email" placeholder="Masukan Email Anda"><br><br>
        <input type="submit" value="kirim"><br>
    </form>
</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama = $_POST ['nama'];
    $email = $_POST ['email'];

    if($nama == ""){
        echo "Nama harus di isi!!";
    } elseif($email == "") {
        echo "Email harus di isi!!";
    } else{
        echo "<br>Wellcome, " .$nama;
        echo "<br>Email : " .$email;
    }

}

?>