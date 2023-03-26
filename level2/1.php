<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Masukkan Jumlah Data</h2>

<form action="" method="post">

<input type="text" name="jumlah" placeholder= "masukkan jumlah data">

<input type="submit" value="SAVE">

</form>

<br><br><br>

<?php

if($_POST['jumlah'])

{

?>

<form action="" method="post">

<?php

$jumlah = $_POST['jumlah'];

 

for($a=1;$a<=$jumlah;$a++)

{

?>

<b>Data Ke - <?php echo $a; ?></b><br>

Input angka <br>

<input type="number" name="angka"><br><br>

<?php

}

 

?>

<input type="submit" name="" value="Simpan">

</form>

<?php

}

?>

<?php
// for ($i=0; $i <= 2 ; $i++) { ?>
  <!-- <form action="" method="post">
//         <label for=>Bilangan input bilangan <?=$i+1?></label>
//         <input type="number" name="a"><br> -->

 <?php // } ?>
<!-- <input type="submit" value="SAVE"></form> -->
<?php
$a = $_POST['angka'];
$dc = str_split($a);
echo $a;
// echo $dc;
// $max = max($dc);
// echo $max;

?>


</body>
</html>