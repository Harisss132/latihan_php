<?php 
echo "=== if statmen ===<br>";

if (3<5){
    echo "bener <br>";
}
echo "<hr>";

echo "=== if else statmen ===<br>";
$nilai = 60;
if($nilai >= 70){
    echo "LULUS <br>";
} else {
    echo "TIDAK LULUS <br>";
}
echo "<hr>";

echo "=== if else if statmen ===<br>";
$nil = 78;
if($nil >= 90){
    echo "Grade A <br>";
} elseif ($nil >=80 ) {
    echo "Grade B <br>";
} elseif ($nil >= 70) {
    echo "Grade C <br>";
} elseif ($nil >= 60) {
    echo "Grade D <br>";
} else {
    echo "Grade E <br>";
}
echo "<hr>";

echo "=== Switch statmen ===<br>";
$n = 88;
switch($n){
    case $n >= 90:
        echo "Grade A";
        break;
    case $n >= 80:
        echo "Grade B";
        break;
    case $n >= 70:
        echo "Grade C";
        break;
    case $n >= 60:
        echo "Grade D";
        break;
    default:
        echo "Grade E";
        break;
}
?>