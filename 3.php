<?php


function count_vowels($text)
{
    $a = substr_count($text, "a"); //hitung jumlah huruf "a"
    $i = substr_count($text, "i"); //hitung jumlah huruf "i"
    $u = substr_count($text, "u"); //hitung jumlah huruf "u"
    $e = substr_count($text, "e"); //hitung jumlah huruf "e"
    $o = substr_count($text, "o"); //hitung jumlah huruf "o"

    echo $a + $i + $u + $e + $o; //hitung total jumlah huruf vocal
}

count_vowels("programmer");

?>
