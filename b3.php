<?php
function checkEvenOrOddYear() {
    $currentYear = date('Y');

    if ($currentYear % 2 == 0) {
        return "Even Year";
    } else {
        return "Odd Year";
    }
}

// Kiểm tra năm hiện tại là năm chẵn hay năm lẻ
$result = checkEvenOrOddYear();
echo "Current year is $result.";