<?php 

//ketika menemui return maka coding di bawah nya tidak akan dieksekusi
/*
untuk mempastikan bahwasanya nilai apa yang ingin di kembalikan maka di akhir kurung function 
tinggal taruk titik dua dan tipe datanya maka nanti tipe data itu lah yang akan di kembalikan 
cth : function nilai(int $value): string

*/

function nilai(int $value): string
{
    if ($value >= 80){
        return "A";
    }elseif($value >= 70){
        return "B";
    }elseif($value >= 60){
        return "C";
    }elseif($value >= 50){
        return "D";
    }else{
        return "E";
    }
    
}

$total =nilai(80);
echo "anda memiliki peringkat = $total";

?>