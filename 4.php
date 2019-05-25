<?php

function cetak_gambar($nilai)
{
    // Mencari Nilai Tengah
    $nilai_tengah = ($nilai + 1) / 2;
    // Memastikan Nilai merupakan Bilangan Ganjil
    if ($nilai % 2 != 0) {
        for ($i = 1; $i <= $nilai; $i++) {
            if ($i <= 1) {
                for ($a = 1; $a <= $nilai; $a++) {
                    echo " x ";
                }
            } else if ($i < $nilai) {
                for ($a = 1; $a <= $nilai; $a++) {
                    if ($a < $nilai_tengah or $a > $nilai_tengah) {
                        echo " = ";
                    } else {
                        echo " x ";
                    }
                }
            } else {
                for ($a = 1; $a <= $nilai; $a++) {
                    echo " x ";
                }
            }
            echo PHP_EOL;
        }
    } else {
        echo "Silahkan masukan Bilangan Ganjil";
    }
}

cetak_gambar(7);

?>
