<?php 
    $arrRandomNumbers = [];

    while (count($arrRandomNumbers) <= 16) {
        $newNumber = rand(0,100);
        if (!in_array($newNumber, $arrRandomNumbers)) {
            $arrRandomNumbers[] = $newNumber;
        }; 
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Numeri random:</h1>
        <p> <?php 
        for ($i = 0; $i < count($arrRandomNumbers); $i++) {
           echo $arrRandomNumbers[$i] . ' '; 
        } ?></p>
    </div>
    
</body>
</html>