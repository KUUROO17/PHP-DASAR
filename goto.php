<?php  

goto a;
echo "Hello world" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;



$a = 1;
while(true){
    echo "hello world ke-$a" .PHP_EOL;
    $a++ ;

    if($a > 10){
        goto end;
    }
}

end:
echo "END LOOPING"

?>