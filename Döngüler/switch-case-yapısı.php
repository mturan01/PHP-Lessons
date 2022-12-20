<?php


$a = 2;
if ($a == 1) {
    echo '1.Koşul';
} elseif ($a == 2) {
    echo '2.koşul Çalıltı';
} else {
    echo 'Else Çalıştı';
}

switch ($a) {
    case 1:
        echo '1.Koşul';
        break;
    case 2:
        echo '2.Koşul';
        break;
    default:
        echo 'default Çalıtı';
}