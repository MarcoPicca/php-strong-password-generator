


<?php
    include __DIR__ . "/./functions/functions.php";

    session_start();

    $errorMessage = '';
    $generatedPassword = '';

    if (isset($_GET['pass-number'])) {
        if (empty($_GET['pass-number'])) {
            $errorMessage = 'inserire un numero per generare una password.';
        } else {
            $passLen = (int)$_GET['pass-number'];
            $generatedPassword = getPassword($passLen);
            
            $_SESSION['generatedPassword'] = $generatedPassword;
            header("Location: password.php");
        }
    }
    
?>


<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong Password Generator</title>
    </head>
    <body>
        <form action="./index.php" method="GET">
            <label for="pass-number">Inserire il numero di caratteri desiderati nella password da generare</label>
            <input type="number" id="pass-number" name="pass-number">
            <button type="submit">Genera!</button>
        </form>

        <?php echo $errorMessage; ?>
    </body>
</html>