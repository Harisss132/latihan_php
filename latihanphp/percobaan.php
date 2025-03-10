<?php
echo "<h1>SAYA SUKA SUKA</h1>";
$nama = "Abdul";
$umur = 25;
echo "Nama saya $nama berumur $umur";
echo "<br>";
define("pesan","Hello World");
echo pesan;
echo "<br>";
$string1 = "Hello World ";
$string2 = 'Hello World';
echo $string1.$string2;
echo "<br>";
$str = "10";
$int = 20;
$sum = $str + $int;
echo ($sum);
echo "<br>";
$names = array("David", "Amy", "Jhon");
echo $names[1];
echo "<br>";
$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
echo $people['David'];
echo "<br>";
$people1 = array('online'=>array('david','amy','rudy'),
                'offine'=>array('jhon','rob','jack'),
                'away'=>array('arthur','oscar','daniel'));
                echo $people1 ['online'][1];
echo "<br>";
?>