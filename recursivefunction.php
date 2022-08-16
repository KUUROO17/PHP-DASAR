<?php 

function factorialloop(int $value): int
{
    $total  = 1;
    for ($i = 1; $i <= $value; $i++):
        $total *= $i;
    endfor;
    return $total;
}

var_dump(factorialloop(5 ));

//recursivefunction

function factorialrecursive(int $value): int{
    if ($value == 1){
        return 1;
    }else{
        return $value * factorialrecursive($value - 1);
    }
}

var_dump(factorialrecursive(5));

?>