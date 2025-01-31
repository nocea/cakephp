<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Meseroo</title>
</head>
<body>
    <h2>Formulario Nuevo Mesero</h2>
    <?php
        //Crea el formulario Mesero
        echo $this->Form->create('Mesero');
        //inputs
        echo $this->Form->input('dni');
        echo $this->Form->input('nombre');
        echo $this->Form->input('apellido');
        echo $this->Form->input('telefono');
        //enviar
        echo $this->Form->end('Crear Mesero');
    ?>
</body>
</html>