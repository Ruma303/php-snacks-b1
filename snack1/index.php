<?php
    $basketChampionship = [
        [
            'homeTeam' => 'VY Canis Majoris',
            'hostTeam' => 'KY Cygni',
            'homePoints' => 23,
            'hostPoints' => 21,
        ],
        [
            'homeTeam' => 'RSGC1-F01',
            'hostTeam' => 'IRC-10414',
            'homePoints' => 34,
            'hostPoints' => 39,
        ],
        [
            'homeTeam' => 'CK Carinae',
            'hostTeam' => 'BI Cygni',
            'homePoints' => 18,
            'hostPoints' => 2,
        ],
        [
            'homeTeam' => 'Stephenson 2-18',
            'hostTeam' => 'UY Scuti',
            'homePoints' => 69,
            'hostPoints' => 54,
        ],
        [
            'homeTeam' => 'VY Canis Majoris',
            'hostTeam' => 'KY Cygni',
            'homePoints' => 23,
            'hostPoints' => 21,
        ],
        [
            'homeTeam' => 'RSGC1-F01',
            'hostTeam' => 'IRC-10414',
            'homePoints' => 34,
            'hostPoints' => 39,
        ],
        [
            'homeTeam' => 'CK Carinae',
            'hostTeam' => 'BI Cygni',
            'homePoints' => 18,
            'hostPoints' => 2,
        ],
        [
            'homeTeam' => 'Stephenson 2-18',
            'hostTeam' => 'UY Scuti',
            'homePoints' => 69,
            'hostPoints' => 54,
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Punteggi campionato</h1>
        <div class="results-div">
            <ul class="list-team">
            <?php    
            for ($i=0; $i < count($basketChampionship); $i++) {
            echo '<li class="match">' . $basketChampionship[$i]['homeTeam'] . ' - ' .
                $basketChampionship[$i]['hostTeam'] . ' | ' . 
                $basketChampionship[$i]['homePoints'] . ' - ' .
                $basketChampionship[$i]['hostPoints'] . '</li>';
                }?>
            </ul>
        </div>
    </div>
</body>
</html>