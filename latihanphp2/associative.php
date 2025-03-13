<?php 
    $mobils = array("brand"=>"Honda","model"=>"Brio","tahun"=>2020);
    // var_dump($mobils)
    //memanggil persatuan key
    echo $mobils["brand"];
    echo "<br>";
    foreach($mobils as $key => $value){
        echo "$key : $value <br>";
    }
?>