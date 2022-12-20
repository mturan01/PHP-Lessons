<?php
// Fonskdiyonlar bir veya birden fazla komutu içinde barındıran yapılardır.

function topla($sayi1, $sayi2){
    return $sayi1+$sayi2;
}
echo topla(3,5);
echo '<br>';
function carp($sayi1=4,$sayi2=3){
    return $sayi1*$sayi2;
}
echo carp(5);