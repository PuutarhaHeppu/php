<!--ülesanne 9-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
<?php
    $firstname = "Marken ";
    $lastname = "Lemming ";
    $ülesanne = "Ülesanne 9 ";
    $fullname = $firstname." ".$lastname;
    $kuupäev = "17.10.2023<br>";
    echo $ülesanne;
    echo $fullname;
    echo $kuupäev;
?>
<body>
<form method="POST">
        <label for="nimi">Sisestage oma nimi:</label>
        <input type="text" name="nimi" id="nimi" required>
        <input type="submit" value="Tervita">
</form>       
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nimi = $_POST["nimi"];
        $vormindatud_nimi = ucfirst(strtolower($nimi));
        echo "Tere, $vormindatud_nimi!<br>";
    }
    $text = "naute pikk naide";
    $result = "";
    for ($i = 0; $i < strlen($text); $i++) {
        $result .= $text[$i] . ".";
    }
    echo $result;
    $txt = "<br>Tyra Peeter, vittu küll";
    $ropud = array("vittu", "Tyra");

    function asendaRopud($tekst, $ropud) {
        return str_replace($ropud, "*****", $tekst);
    }
    $txt = asendaRopud($txt, $ropud);
    print_r($txt);
?>
<body>
<form method="POST">
        <label for="nimi">Sisestage oma nimi:</label>
        <input type="text" name="nimi" id="nimi" required>
        <input type="submit" value="OK">
</form>
</body>
<?php
$täpitähed = array("ä", "ö", "ü", "õ");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = $_POST["nimi"];
    function asendatäpitähed($nimi, $täpitähed) {
        $asendustähed = array("a", "o", "y", "o");
        return str_replace($täpitähed, $asendustähed, $nimi);
    }
    $vormindatud_nimi = ucfirst(strtolower($nimi));
    $email = asendatäpitähed($vormindatud_nimi, $täpitähed)."@tthk.ee";
    
    echo "Siin on teie kooli email: ".$email."<br>";
}
?>
</body>

</html>
