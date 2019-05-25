<?php
function ganti_kata($kata, $ori, $replace)
{
  // Menjadikan String ke Array
  $arr = str_split($kata);

  // Mengubah String dengan cara Perulangan
  foreach ($arr as $item) {
    $result = array_search($ori, $arr);

    if ($arr[$result] == $ori) {
      $arr[$result] = $replace;
    }
  }

  // Menampilkan dan mengubah array menjadi String
  echo implode("", $arr);

}

ganti_kata("purwakarta", "a", "o");


?>
