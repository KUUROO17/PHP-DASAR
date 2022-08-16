<?php  

function sumAll(...$values){
 $total = 0;
 foreach($values as $value){
    $total += $value;
 }
 echo "Total " . implode(",", $values). "=$total" .PHP_EOL;
}

//kita mengirim array ke argument function gak perlu []
sumAll(1, 2,3,4,5);

//apabila kita terlanjur sudah memiliki array seperti biasanya maka penulisannya begini
$values =[1, 2, 7, 4, 5];
sumAll(...$values)
//harus taruk titik 3 di belakangnya
?>