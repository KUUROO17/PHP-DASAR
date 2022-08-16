<?php  

$data = [
    "action" => "boh hate"
];

//pengecekan data dengan if statement

if (isset($data["action"])){
    $action = $data["action"];
}else{
    $action = "datanya tidak ada";
}

echo $action .PHP_EOL;

//pengecekan data dengan Null Coalescing Operator

$action = $data["action"] ?? 'tidak ada data';
echo $action .PHP_EOL;

?>