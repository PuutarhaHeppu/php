<!--ülesanne 5-->

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
    $ülesanne = "Ülesanne 5";
    $fullname = $firstname." ".$lastname;
    $kuupäev = "03.10.2023<br>";
    $nimed = array("Mari ", "Laura ", "Anna ", "Katarina ", "Sara ", "Pam ", "Lauren ", "Marie ");
    $sort = sort($nimed);
    $random = array_rand($nimed);

    echo $ülesanne;
    echo $fullname;
    echo $kuupäev;
    echo var_dump($nimed)."<br>";
    print_r($nimed)."<br>";
    echo $nimed[$random]."<br>";
    echo $nimed[0];
    echo $nimed[1];
    echo $nimed[2]."<br>";
    ?>
</body>
</html>