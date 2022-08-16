<?php  
$nilai = "E";

//MENGGUNAKAN if else statement
if($nilai == "A"):
    echo "anda lulus dengan sangat baik" .PHP_EOL;
elseif($nilai == "B" || $nilai == "C"):
    echo "anda lulus" .PHP_EOL;
elseif($nilai == "D"):
    echo"anda tidak lulus" .PHP_EOL;
else:
    echo "mungkin anda salah jurusan" .PHP_EOL;
endif;

//menggunakan switch statement

switch($nilai):
case "A":
    echo "anda lulus dengan sangat baik" .PHP_EOL;
break;
case "B":
case "C":
    echo "anda lulus" .PHP_EOL;
break;
case "D":
    echo"anda tidak lulus" .PHP_EOL;
break;
default:
echo "mungkin anda salah jurusan" .PHP_EOL;
endswitch
?>