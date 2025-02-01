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
    <p><strong> Creado:<?php echo $this->Time->format('d-m-Y ; h:i A',$mesero['Mesero']['created'])?></strong></p>
    <p><strong> Modificado:<?php echo $this->Time->format('d-m-Y ; h:i A',$mesero['Mesero']['modified'])?></strong></p>
    
    <h3>Encargado de las mesas:</h3>
    <!--Si el mesero no tiene mesas-->
    <?php if(empty($mesero['Mesa'])):?>
        <p>El mesero no tiene mesas asociadas</p>
    <?php endif?>
    
    <?php foreach ($mesero['Mesa'] as $m)://por cada mesa del mesero?>
        <strong><p>Serie:<?php echo $m['serie']?></p></strong>
        <p>Puestos:<?php echo $m['puestos']?></p>
        <p>posicion:<?php echo $m['posicion']?></p>
        <p>Creado:<?php echo $m['created']?></p>
        <br>
    <?php endforeach?>
    <?php echo $this->Html->link('Volver a la lista de meseros',array('controller'=>'meseros','action'=>'index'));?>
</body>
</html>