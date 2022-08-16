<?php 
//tidak ada nama function 
//perlu titik koma

$sayhello = function(string $name)
            {
                echo "Hello $name " .PHP_EOL;
            };

$sayhello("EKO");
$sayhello("wali");

function saygoodbye(string $name, $filter){
    $finalname = $filter($name);
    echo "Good bye $finalname" .PHP_EOL;
}
//anonymous function yang function nya di buat pas pemanggilan function
saygoodbye("Eko", function (string $name):string{
        return strtolower($name);
} );

//anonymouse function yang di bua variabell dulu baru di panggil ke functio
$filterfunction = function (string $name):string{
    return strtoupper($name);
};
saygoodbye("Eko", $filterfunction );
?>