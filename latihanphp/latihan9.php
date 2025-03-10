<?php 
    $data = array("Abdul"=>array(45,32,15),
                  "Budi"=>array(70,85,60),
                  "Tri"=>array(65,75,80));
$abdul = array_sum($data["Abdul"])/3;
$budi = array_sum($data["Budi"])/3;
$tri = array_sum($data["Tri"])/3;
echo "Nilai rata-rata Abdul adalah " . round($abdul) . "<br>";
echo "Nilai rata-rata Budi adalah " . round($budi) . "<br>";
echo "Nilai rata-rata Tri adalah " . round($tri);
?>