<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Bilangan 1 :</label>
        <input type="number" name="1"><br>
        <label for="">Bilangan 2 :</label>
        <input type="number" name="2"><br>
        <label for="">Bilangan 3 :</label>
        <input type="number" name="3"><br>
        <label for="">Bilangan 4 :</label>
        <input type="number" name="4"><br>
        <button type="submit" name="submit">kirim</button>

    </form>
</body>
</html>
<?php
if (isset($_POST["submit"])){
    $a = $_POST["1"];
    $b = $_POST["2"];
    $c = $_POST["3"];
    $d = $_POST["4"];

if( $a > $b){
   if($a > $c){
    if($a > $d){
        echo"Nilai terbesar adalah: $a";
    }else{
        echo"Nilai terbesar adalah: $d";
    }
   }
}
else if($b > $c){
    echo"Nilai terbesar adalah: $b";
}else{
    echo"Nilai terbesar adalah: $c";
}
}
?>