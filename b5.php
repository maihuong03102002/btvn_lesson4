<!DOCTYPE html>
<html>
<head>
    <style>
        .even {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
  function printNumbers() {
    for ($i = 1; $i <= 100; $i ++) {
        if ($i % 2 == 0) {
            echo "<span class='even'>$i </span>";
        } else {
            echo "$i ";
        }
    }
}
// Gọi hàm để in ra dãy số từ 1 đến 100
printNumbers();
?>
</body>
</html>
<?php