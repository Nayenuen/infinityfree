<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Compra de boletos</title>
</head>
<body>
<h1> Compra de boletos</h1>    
<h2>Formulario de ventas</h2>

<form class="boletos" action="guardar.php" method="post">
<label for="boleto">Boleto</label>
<input type= "number" id="boleto" name="boleto" maxlength="6" required> <br><br>
<label for="pelicula">Pelicula</label>
<input type= "text" id="pelicula" name="pelicula" maxlength="40" required> <br><br>

<button class="submit" type="submit">Reservar boletos</button>

</form>



</body>
</html>