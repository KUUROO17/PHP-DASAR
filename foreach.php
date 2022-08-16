<?php  

$names = ["ahmad", "wali", "alchalidi"];

// echo "hello bos $names[1]";
for ($i = 0; $i < count($names); $i++){
    echo "data ke $i = $names[$i] " .PHP_EOL;
}

foreach($names as $nama ){
    echo "data  $nama " .PHP_EOL;
}
//untuk menampakkan index
foreach($names as $index => $nama ){
    echo "data ke-$index  $nama " .PHP_EOL;
}

//menggunakan metode array mapping
$person = [
    "first_name" => "ahmad",
    "middle_name" => "wali",
    "last_name" => "alchalidi"
];

foreach($person as $key => $value){
    echo "$key : $value" .PHP_EOL;
}
?>