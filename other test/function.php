<?php
$x = 8;

function data(){
    $x = 2;
    $y = 3;
    $z = 4;

    return $x + $y + $z;
}

data(); echo $x;