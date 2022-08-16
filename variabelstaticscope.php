<?php 
/*
pada default nya local scope ketika function di panggil berkali kali variabel scope di dalamnya
tidak akan menambah nilai value nya apabila nilai value nya satu walaupun kita tambah incrementnya
dia ketika kita panggil untuk kedua kali nya maka niai nya akan tetap 1 tidak akan di ambil dari yang
kita pakai sebelumnya sampai berapa kali pun kita pakai dia akan tetap default nilai nya gak akan bertambah krn di panggil sebelumnya jadi kesimpulannya dia gak kan
terpengaruh istillahnya,
kalau kita ingin dia selalu menaikkan nilai karena udh kita panggil sekali maka
kita harus menaruh menjadikan varibael yang di dalam function / variabel local menjadi variabel staic,
supaya dia nanti nilai nya akan bertambah kalau kita panggil berkali kali jadi nilainya kalau kita panggill kedua kali function nya nanti akan di tambah dengan function
pertama kita panggil begitu seterusnya
*/
function increment()
{
    static $counter = 1;
    echo "counter = $counter" .PHP_EOL;
    $counter++;
}

increment();
increment();
increment();


?>