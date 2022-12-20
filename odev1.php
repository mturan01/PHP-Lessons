<?php


function ucgen($ucgen)
{
    for ($a = 1; $a <= $ucgen; $a++) {
        $b=1;
        while ($b <= $a) {
            $b++;
            print "0";
        }
        print "<br>";
    }
}
ucgen(10);