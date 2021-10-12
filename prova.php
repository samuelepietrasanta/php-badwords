<?php $variabile = "Fuck you (Fuck you), fuck you very, very much
                    'Cause we hate what you do
                    And we hate your whole crew
                    So, please don't stay in touch"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROVA PHP</title>
</head>
<body>

    <h1>TESTO ORIGINALE:</h1>

    <h3>
        <?php echo  $variabile?>

    </h3>

    <br>
    <br>
    <hr>

    <h1>TESTO CENSURATO:
    </h1>

    <h3> <?php echo str_replace($_GET["censored"] , "***", $variabile) ?></h3>
    
</body>
</html>