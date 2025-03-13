<?php 
    $cars = array (
        array("Volvo","22","18"),
        array("BMW","15","13"),
        array("Saab","5","2"),
        array("Land","17","15")
    );

    echo $cars[0][0]." :Stok tersdia ".$cars[0][1]." :Terjual ".$cars[0][2]."<br>";
    echo $cars[1][0]." :Stok tersdia ".$cars[1][1]." :Terjual ".$cars[1][2]."<br>";
    echo $cars[2][0]." :Stok tersdia ".$cars[2][1]." :Terjual ".$cars[2][2]."<br>";
    echo $cars[3][0]." :Stok tersdia ".$cars[3][1]." :Terjual ".$cars[3][2]."<br>";

    echo "<hr>";
    //fungsi sort()
    echo "<h3>Menampilkan Fungsi Sort</h3>";
    $mobil=array("Volvo","BWM","Toyota");
    sort($mobil);
    $length=count($mobil);
    //perulangan untuk menampilkan nilai array
    for($x = 0; $x < $length; $x++){
        echo $mobil[$x];
        echo "<br>";
    }

    echo "<hr>";
    //fungsi rsort()
    echo "<h3>Menampilkan Fungsi Rsort</h3>";
    $mobil=array("Volvo","BWM","Toyota");
    rsort($mobil);
    $length=count($mobil);
    //perulangan untuk menampilkan nilai array
    for($x = 0; $x < $length; $x++){
        echo $mobil[$x];
        echo "<br>";
    }
    
    echo "<hr>";
    //fungsi asort()
    echo "<h3>Menampilkan Fungsi Asort</h3>";
    $mobil=array("Zulka"=>"Volvo","Ali"=>"BMW","Ajuab"=>"Toyota");
    asort($mobil);
    foreach($mobil as $x => $nilai_x){
        echo "kunci=" .$x. " ,nilainya=" .$nilai_x;
        echo "<br>";
    }

    echo "<hr>";
    //fungsi ksort()
    echo "<h3>Menampilkan Fungsi Ksort</h3>";
    $mobil= array("Zulka"=>"Volvo","Ali"=>"BMW","Ajuab"=>"Toyota");
    ksort($mobil);
    foreach($mobil as $x => $nilai_x){
        echo "kunci= " .$x. " ,nilainya=" .$nilai_x;
        echo "<br>";
    
    }

    echo "<hr>";
    //fungsi arsort()
    echo "<h3>Menampilkan Fungsi Arsort</h3>";
    $mobil= array("Zulka"=>"Volvo","Ali"=>"BMW","Ajuab"=>"Toyota");
    arsort($mobil);
    foreach($mobil as $x => $nilai_x){
        echo "kunci= " .$x. " ,nilainya=" .$nilai_x;
        echo "<br>";
    }

    echo "<hr>";
    //fungsi krsort()
    echo "<h3>Menampilkan Fungsi Krsort</h3>";
    $mobil= array("Zulka"=>"Volvo","Ali"=>"BMW","Ajuab"=>"Toyota");
    krsort($mobil);
    foreach($mobil as $x => $nilai_x){
        echo "kunci= " .$x. " ,nilainya=" .$nilai_x;
        echo "<br>";
    }

    echo "<hr>";
    //untuk menampilakan isi array
    $siswas = array("Ali","Umar","Usman");
    foreach($siswas as $siswa){
        echo $siswa. "<br>";
    }
    //jika mengetahui banyaknya array
    for($i=0; $i<3;$i++){
        echo $siswas[$i]. "<br>";
    }
    $siswas[3] = "Abu";
    array_push($siswas);
?>