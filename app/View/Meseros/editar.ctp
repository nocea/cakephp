<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mesero</title>
</head>

<body>
    <?php
        echo $this->Form->create('Mesero');
        echo $this->Form->input('dni');
        echo $this->Form->input('nombre');
        echo $this->Form->input('apellido');
        echo $this->Form->input('telefono');
        echo $this->Form->end('Editar Mesero');
        echo $this->Html->link('Volver a la lista de meseros',array('controller'=>'meseros','action'=>'index'));
    ?>
</body>

</html>