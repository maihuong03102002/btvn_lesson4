<?php
function checkEvenOrOddYear() {
    $currentYear = date('Y');

    if ($currentYear % 2 == 0) {
        return "Even Year";
    } else {
        return "Odd Year";
    }
}
$result = checkEvenOrOddYear();
echo "Current year is $result.";
