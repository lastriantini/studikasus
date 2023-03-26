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
        <button type="submit" name="submit">kirim</button>

    </form>
</body>
</html>
<?php
if (isset($_POST["submit"])){
    $a = $_POST["1"];
    $b = $_POST["2"];
    $c = $_POST["3"];
    
    if ($a > $b) {
        echo "Nilai terbesar adalah : " .$a;
    }else if ($a > $c) {
        echo "Nilai terbesar adalah : " .$b;
    }else {
        echo "Nilai terbesar adalah : " .$c;
    }
} 
?>