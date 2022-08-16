 <?php 
 
 function sayhello(string $name, callable $filter){
        $finalname = call_user_func($filter, $name);
        echo "hello $finalname" .PHP_EOL;
 }

 
 sayhello("wali", "strtoupper");
 sayhello("sufi", "strtolower");

 //memakai anonymous function
sayhello("zaid", function(string $name): string{
    return strtoupper($name);
});

//memakai variabel function
$sayaja = function(string $name): string{
    return strtoupper($name);
};

sayhello("nifa", $sayaja);

//pakai arrow function
sayhello("hanum", fn($name) => strtoupper($name));

 ?>