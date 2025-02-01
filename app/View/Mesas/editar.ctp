<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mesa</title>
</head>
<body>
<?php
        echo $this->Form->create('Mesa');
        echo $this->Form->input('serie');
        echo $this->Form->input('puestos');
        echo $this->Form->input('posicion');
        echo $this->Form->input('mesero_id');
        echo $this->Form->end('Editar Mesa');
        echo $this->Html->link('Volver a la lista de mesas',array('controller'=>'mesas','action'=>'index'));
    ?>
</body>
</html>