<?php
 
for($i=1;$i<=100;$i++){ // perulangan 1 sampai 100
    $nilai=0;
    for($x=1;$x<=$i;$x++){ // perulangan bilangan pembagi
        if($i % $x == 0){ // modulus 0
            $nilai++;
        }
    }

    if($nilai == 2){ //  2 merupakan bilangan prima
        echo $i.' ';
    }
}
 
?>