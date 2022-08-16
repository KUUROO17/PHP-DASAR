<?php 

//Assign By Reference = reference terhadap variabel
$name = "wali";

$othername = &$name;
$othername = "ahmad";

echo $name .PHP_EOL;
echo $othername .PHP_EOL;

//Pass By Reference = reference terhadap parameter
function increment(int &$value){
    $value++;
}


$counter = 1;
increment($counter);

echo $counter .PHP_EOL;

//Returning References = reference di return value
function &getvalue(){
    static $value = 100;
    return $value;
}

$a = &getvalue();
$a = 200;

$b = &getvalue();
echo $b . PHP_EOL;

?>