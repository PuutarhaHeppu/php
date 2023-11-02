<!--ülesanne 12-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $firstname = "Marken ";
    $lastname = "Lemming ";
    $fullname = $firstname." ".$lastname;
    $kuupäev = "03.10.2023<br>";

    echo $ülesanne;
    echo $fullname;
    echo $kuupäev;
?>
<body>
    <h2>Sõiduaeg</h2>
    <form method="post">
        <label for="start_time">Stardi aeg (hh:mm):</label>
        <input type="text" name="start_time" id="start_time" required>
        <br>
        <label for="end_time">Lõppaeg (hh:mm):</label>
        <input type="text" name="end_time" id="end_time" required>
        <br>
        <input type="submit" value="Leia sõiduaeg">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start_time = $_POST["start_time"];
        $end_time = $_POST["end_time"];

        if (strlen($start_time) >= 5 && strlen($end_time) >= 5) {
            list($start_hours, $start_minutes) = explode(":", $start_time);
            list($end_hours, $end_minutes) = explode(":", $end_time);

            $start_timestamp = $start_hours * 60 + $start_minutes;
            $end_timestamp = $end_hours * 60 + $end_minutes;

            if ($end_timestamp >= $start_timestamp) {
                $minutes = $end_timestamp - $start_timestamp;
                $hours = floor($minutes / 60);
                $minutes %= 60;

                echo "<p>Sõiduaeg: $hours tundi ja $minutes minutit</p>";
            } else {
                echo "<p>Lõppaeg peab olema suurem kui stardi aeg.</p>";
            }
        } else {
            echo "<p>Sisestage korrektne aeg (hh:mm).</p>";
        }
    }
    ?>
</body>
</html>