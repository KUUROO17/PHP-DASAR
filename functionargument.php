<?php  

//default argument value nya pakek yang di argument ke dua aja
function hello($name , $lastname= "pengunjung"){
    echo "selamat datang $name $lastname" .PHP_EOL;
}

hello("ahmad");
hello("wali");

/*
KITA BISA MEMASUKKAN TIPE DATA ke dalam function dan nantinya
value yang kita masukkan akan di konfersikan ke variabel yang kita deklerasikan di 
pembuatan function
*/
function sum(int $first, int $second){
  $total = $first + $second;
  echo " total dari $first + $second = $total" .PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

?>