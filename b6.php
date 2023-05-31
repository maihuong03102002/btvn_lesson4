<?php
function printYears($array) {
    foreach ($array as $year) {
        echo $year . " ,";
    }
}

$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

echo "Các năm trong mảng: <br>";
printYears($nam);