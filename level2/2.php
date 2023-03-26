<?php

$angka = array();
for ($i = 1; $i <= 100; $i++) {
  $angka[] = $i;
}

$angkaterbesar = max($angka);


echo "Angka Terbesar Dari 100 Bilangan Adalah:  " . $angkaterbesar;
?>