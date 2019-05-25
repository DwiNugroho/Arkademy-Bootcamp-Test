<?php
function betweenDays($awal, $akhir) {
  while ($awal <= $akhir) {
    echo date('Y-m-d', strtotime($awal)). ', ';
    $awal = date('Y-m-d', strtotime('+1 days', strtotime($awal)));
  }

}

betweenDays('2019-11-01', '2019-11-05');

 ?>
