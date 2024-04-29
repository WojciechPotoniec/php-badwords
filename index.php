<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>PHP Bad words</title>
</head>

<body>
    <h1 class="text-center pt-4">PHP Bad words</h1>
    <form action="answer.php" method="GET" class="d-flex flex-column  align-items-center">
        <p>Inserisci la tua frase</p>
        <input type="text" name="textarea" class="my-2">
        <p>Inserisci la parola da censurare</p>
        <input type="text" name="badword" class="my-2">
        <button class="btn btn-primary" type="submit">Send</button>
    </form>
</body>
</html>