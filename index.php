<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naturreservat</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Naturreservat</h1>
    <form action="./results.php" method="POST">
        <label>Apor</label>
        <input type="number" name="apa">
        <label>Giraffer</label>
        <input type="number" name="giraffer">
        <label>Tiger</label>
        <input type="number" name="tiger">
        <label>Kokosnötter</label>
        <input type="number" name="kokosnuts">
        <button type="submit" name="submit">Skicka</button>
    </form>
</body>
</html>