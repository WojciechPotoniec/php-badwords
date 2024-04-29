<?php
$textarea = $_GET['textarea'];
$badword = $_GET['badword'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>Answer</title>
</head>

<body>
    <p class="text-center p-4">
        La tua frase è: 
        <br> 
        <?php echo "<strong>$textarea</strong>" ?>
        <br>
        ed è di 
        <?php echo  strlen($textarea) . ' caratteri' ?>
    </p>
    <p class="text-center">La tua frase censurata è: <br>
        <?php echo "<strong>" . str_replace($badword, '***', $textarea) . "</strong>"?>
    </p>
    <p class="text-center">la parola censurata è: <?php echo "<strong>$badword</strong>" ?></p>
</body>

</html>