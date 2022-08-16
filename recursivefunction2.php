<?php 

function loop(int $value){
    if ($value == 0){   
        echo "perulangan selesai" .PHP_EOL;
    }else{
        echo "Loop-$value". PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000);

?>