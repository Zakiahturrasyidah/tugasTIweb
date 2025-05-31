<?php 
    echo ("Hello World");
    //ini adalah komentar 1baris

    /*ini 
    adalah
    komentar
    lainnya*/

    $nama = "Zakiah Turrasyidah";
    $message = "<p>Hallo $nama, selamat belajar PHP</p>";
    echo $message;

    //Tipe data (string,, int, float, boolean, array)
    $a = "Siddiq"; //string
    $b = 45; //integer
    $c = 3.65; //float
    $d = TRUE; //boolean
    $e = FALSE; //boolean
    $f = ["Ainun", 2002, 3.9, TRUE]; //array

    echo $f[0];
    var_dump($e);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4><?= $message ?></h4>
</body>
</html>
