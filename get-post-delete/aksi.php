<?php
 //validasi pengiriman data (YES / NO)
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = uniqid();
    $name = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];

    $file = 'data.json';
    if (file_exists(filename: $file)){
        $dataFile = file_get_contents(filename: $file);
        $data = json_decode(json: $dataFile, associative: true);
    }else{
        $data = [];
    }
    $myData = array(
        "id" => $id,
        "nama" => $name,
        "jenis" => $jenis,
        "jumlah" => $jumlah
    );

    $data[] = $myData;
    // array_push(array:$data, values: $myData);
    $json = json_encode(value:$data, flags:JSON_PRETTY_PRINT);
    file_put_contents(filename:$file, data:$json);

    header(header:"Location:bacadata.php");
    exit();
 }
?>