<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="navbar">
        <div class="container">
            <ul class="nav bar-nav">
                <li><a href="index.php" class="class">INICIO</a></li>
                <li><a href="" class="class">AGREGAR</a></li>
            </ul>
        </div>
    </div>
    <div>
        <h1>Registro de animales</h1>
        <h2>Ingrese los datos solicitados</h2>
        <form action="">
            <label for="apodo">Apodo:</label>
            <input id="apodo" type="text" maxlength="100">
            <label for="especie">Especie:</label>
            <input id="especie" type="text" maxlength="100">
            <label for="color">Color:</label>
            <input id="color" type="text" maxlength="100">

            <input type="button">
        </form>
    </div>
</body>
</html>