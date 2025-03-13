<?php 
echo "=== For Loop ++ ===<br>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is : $x <br>";
}
echo "<hr>";

echo "=== For Loop -- ===<br>";
for ($x = 10; $x >= 0; $x--) {
    echo "The number is : $x <br>";
}
echo "<hr>";

echo "=== While Loop ++ ===<br>";
$y = 0;
while ($y <= 10) {
    echo "The number is : $y <br>";
    $y++;
}
echo "<hr>";

echo "=== While Loop -- ===<br>";
$y = 10;
while ($y >= 0) {
    echo "The number is : $y <br>";
    $y--;
}
echo "<hr>";

echo "=== Do While Loop ===<br>";
$z = 0;
do {
    echo "The number is : $z <br>";
    $z++;
} while ($z <= 10);
echo "<hr>";

echo "=== Foreach ===<br>";
$warna = array("Merah","Biru","Kuning","Hijau");
foreach ($warna as $w) {
    echo "$w <br>";
}
?>