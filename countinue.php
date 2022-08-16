<?php  

for($a = 0; $a <= 100; $a++){
    if ($a % 2 == 0){
        continue;
    }
    echo "perulangan for continue ke-$a " .PHP_EOL;
}

?>