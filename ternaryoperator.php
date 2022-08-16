<?php  

$gender = "WANITA";
$hi = null;

if ($gender == "PRIA"){
    $hi = "hai bro";
}else{
    $hi = "hai nona";
}
 echo $hi .PHP_EOL;

 //memakai ternary operator
$hi = $gender == "PRIA" ? "HAI BRO!" : "hai nona" .PHP_EOL;
echo $hi .PHP_EOL;
?>