<?php
$nilai=85;
$x1=5;
$x2=6;
echo "x1 memiliki nilai 5 sedangkan x2 memiliki nilai 6.Manakah nilai x yang lebih besar?<br>";
if ($x1 < $x2) {
    echo "nilai x2 lebih besar";
}
else {
    echo "nilai x1 lebih besar";
}

echo "Andi memiliki nilai 85.Maka andi mempunya kategori nilai: ";
if ($nilai > 88 ){
    echo "nilai A-";
}
elseif ($nilai>80){
    echo "Nilai:B";
}
elseif ($nilai==85) {
    echo "Nlai B++";
}
?>