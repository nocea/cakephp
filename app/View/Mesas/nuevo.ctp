<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Mesa</title>
</head>
<body>
<?php
        //Crea el formulario Mesero
        echo $this->Form->create('Mesa');
        //inputs
        echo $this->Form->input('serie');
        echo $this->Form->input('puestos');
        echo $this->Form->input('posicion',array('rows'=>3));
        echo $this->Form->input('mesero_id');
        //enviar
        echo $this->Form->end('Crear Mesa');
        
    ?>
     <?php echo $this->Html->link('Volver a la lista de meseros',array('controller'=>'mesas','action'=>'index'));?>
</body>
</html>