<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Mesero</title>
</head>
<body>
    <h2>Datos Mesero
    <?php
    //obtengo la variable mesero que es una lista,y del mesero obtengo sus datos de cada columna.
    echo $mesero['Mesero']['nombre'];
    ?>
    </h2>
    <p><strong> DNI:<?php echo $mesero['Mesero']['dni']?></strong></p>
    <p><strong> Teléfono: <?php echo $mesero['Mesero']['telefono']?></strong></p>
    <p><strong> Creado:<?php echo $mesero['Mesero']['created']?></strong></p>
</body>
</html>