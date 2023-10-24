<!--ülesanne 2-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  <?php
    $firstname = "Marken ";
    $lastname = "Lemming ";
    $ülesanne = "Ülesanne 2 ";
    $fullname = $firstname." ".$lastname;
    $kuupäev = "03.10.2023<br>";
    $n1 = 12;
    $n2 = 10;
    $li = $n1 + $n2;
    $ko = $n1 * $n2;
    $la = $n1 - $n2;
    $ja = $n1 / $n2;
    $jaak = $n1 % $n2;
    $mm = 1000;
    $cm = $mm/10;
    $m = $mm/1000;
    $külg1 = 7;
    $külg2 = 10;
    $diagonaal = sqrt($külg1**2 + $külg2**2);
    $pindala = $külg1 * $külg2 / 2;
    $ümbermõõt = $külg1 + $külg2 + $diagonaal;

    echo $ülesanne;
    echo $fullname;
    echo $kuupäev;
    echo $li."<br>";
    echo $la."<br>";
    echo $ko."<br>";
    echo $ja."<br>";
    echo $jaak."<br>";
    echo $mm."mm<br>";
    echo $cm."cm<br>";
    echo $m."m<br>";
    echo $diagonaal."<br>";
    echo round($pindala)."<br>";
    echo round($ümbermõõt)."<br>";
    ?>
</body>
</html>
