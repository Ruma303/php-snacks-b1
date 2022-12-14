<?php 
    // Acquisizione dati utente dagli input
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    
    $nameOK = false;
    //Controllo lunghezza name
    if (strlen($name) >= 3) {
      $nameOK = true;
    } 
    //echo $nameOK . '<br>Lunghezza caratteri Nome: ' . strlen($name);

    //Ricerca della chiocchiola nella mail
    $pos_at = strpos($mail, '@');
    //Ricerca del punto nella mail
    $pos_dot = strpos($mail, '.', $pos_at);

    $mailOK = false;
    // Controllo se @ e . sono al loro posto ed esistono
    if ($pos_at && $pos_dot) {
        $mailOK = true;
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="GET">
            <label for="name">Nome: </label>
            <input type="text" id='name' name="name">
            <label for="mail">Mail: </label>
            <input type="mail" id='mail' name="mail">
            <label for="age">Età: </label>
            <input type="number" id='age' name="age">
            <button>Invia</button>
        </form>
        <!-- Validazione con if se è tutto ok -->
        <h1><?php
            if ($nameOK && $mailOK && $age) {
                echo 'Accesso Riuscito';
            } else {
                echo 'Accesso Negato';
            }
        ?></h1> 
    </div>
</body>
</html>