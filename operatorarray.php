<?php 
 
 $first =[
    "first_name" => "eko"
 ];
 $last =[
    "last_name" => "khannedy"
 ];

 $full = $first + $last;
 var_dump($full);
 

 $a = [
    "first_name" => "ahmad",
    "last_name" => "wali"
 ];
 $b = [
    "last_name" => "wali",
    "first_name" => "ahmad"
 ];

 var_dump($a == $b);
 var_dump($a === $b);

 ?> 