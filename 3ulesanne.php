<!--ülesanne 3-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Sisesta mõõdud:</h2>
<form method="POST">
    <label for="aluse1">Alus 1:</label>
    <input type="number" step="0.1" name="aluse1" required><br>

    <label for="aluse2">Alus 2:</label>
    <input type="number" step="0.1" name="aluse2" required><br>

    <label for="kõrgus">Kõrgus:</label>
    <input type="number" step="0.1" name="kõrgus" required><br>

    <input type="submit" value="Arvuta">
</form>
<body>  <?php
    $firstname = "Marken ";
    $lastname = "Lemming ";
    $fullname = $firstname." ".$lastname;
    $kuupäev = "03.10.2023<br>";
    $ülesanne = "Ülesanne 3 ";

    echo $ülesanne;
    echo $fullname;
    echo $kuupäev;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alus1 = floatval($_POST["aluse1"]);
    $alus2 = floatval($_POST["aluse2"]);
    $kõrgus = floatval($_POST["kõrgus"]);
    $trapetsi_pindala = 0.5 * ($alus1 + $alus2) * $kõrgus;
    $rombi_ümbermõõt = 4 * sqrt(pow($alus1 / 2, 2) + pow($kõrgus, 2));

    echo "Trapetsi pindala on " . number_format($trapetsi_pindala, 1) . " ruudus ja rombi ümbermõõt on " . number_format($rombi_ümbermõõt, 1);
}
?>
</body>
</html>
