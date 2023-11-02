<!--ülesanne 12-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Palkade võrdlus<h2>
<?php
    $firstname = "Marken ";
    $lastname = "Lemming ";
    $ülesanne = "ülesanne 12 ";
    $fullname = $firstname." ".$lastname;
    $kuupäev = "03.10.2023<br>";

    echo $ülesanne;
    echo $fullname;
    echo $kuupäev;

    $maleSalaries = [];
    $femaleSalaries = [];
    
    $filename = 'tootajad.csv';
    
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
            $name = $data[0];
            $gender = $data[1];
            $salary = $data[2];
    
            if ($gender === 'm') {
                $maleSalaries[] = $salary;
            } elseif ($gender === 'n') {
                $femaleSalaries[] = $salary;
            }
        }
        fclose($handle);
    
        $maleAverageSalary = count($maleSalaries) > 0 ? array_sum($maleSalaries) / count($maleSalaries) : 0;
        $femaleAverageSalary = count($femaleSalaries) > 0 ? array_sum($femaleSalaries) / count($femaleSalaries) : 0;
        $maxMaleSalary = max($maleSalaries);
        $maxFemaleSalary = max($femaleSalaries);
    
        echo "Meeste keskmine palk: $maleAverageSalary<br>";
        echo "Meeste suurim palk: $maxMaleSalary<br>";
        echo "Naiste keskmine palk: $femaleAverageSalary<br>";
        echo "Naiste suurim palk: $maxFemaleSalary<br>";
    } else {
        echo "Andmefaili ei leitud.";
    }
    ?>
</body>
</html>
