<?php 
 
 $eko = array(
    "id" => "eko",
    "name" => "Eko kurniawan",
    "age" => 21
 );
 $wali =  array(
    "id" => "wali",
    "name" => "ahmad wali",
    "age" => 21,
    "addres" => array(
        "city" => "semewew",
        "country" => "indonesia "
    )
 );

 $wali["addres"]["city"] = "lhoekseumawe";

//  unset($wali["addres"]["city"]);


 var_dump($wali["addres"]["city"]);
 var_dump(count($wali["addres"]));

 ?>