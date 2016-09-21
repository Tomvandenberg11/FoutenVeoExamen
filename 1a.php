<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div id="container">
        <h1>Cijfer berekenen</h1>
        <form method="POST" action="1a_process.php">
            Naam: <br><input type="text" name="naam" autofocus ><br><br>
            Aantal fouten: <br><input type="text" name="fouten" ><br><br>
            Norm: <br>
            <input type="radio" name="norm1" value="1" checked="checked"> 1<br>
            <input type="radio" name="norm1" value="2"> 2<br>
            <input type="radio" name="norm1" value="3"> 3<br>
            <input type="radio" name="norm1" value="4"> 4<br>
            <input type="radio" name="norm1" value="5"> 5<br><br>
            <input type="submit">
        </form>
    </div>    
</body>
</html>