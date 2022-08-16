<?php  

$a = 1;

while($a <= 10){
    echo "hello world ke-$a" .PHP_EOL;
    $a++;
}

$a = 1;
while($a <= 10):
    echo "hello world ke-$a" .PHP_EOL;
    $a++;
endwhile;
?>