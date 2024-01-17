

<?php
    $errorMessage = '';
    $generatedPassword = '';

    
    function getPassword ($length) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
        $pass = '';
        $charactersLen = strlen($characters); 
        
        for ($i = 0; $i < $length; $i++) {
            $pass .= $characters[rand(0, $charactersLen - 1)];
        }
        return $pass;
    }

    

    if (isset($_GET['pass-number'])) {
        if (empty($_GET['pass-number'])) {
            $errorMessage = 'inserire un numero per generare una password.';
        } else {
            $passLen = (int)$_GET['pass-number'];
            $generatedPassword = getPassword($passLen);
            
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
        <?php echo "La tua Password è: $generatedPassword"; ?>
    </body>
</html>