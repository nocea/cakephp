<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meseros</title>
</head>
<body>
    <h1>Index Meseros</h1>
    <h2>Lista de Meseros</h2>
    <?php echo $this->Html->link('Crear Mesero',array('controller'=>'meseros','action'=>'nuevo'));
    ?>
    <table>
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>apellidos</td>
            <td>acciones</td>
        </tr>
   
    <?php
        foreach ($meseros as $mesero):
            
    ?>
    <tr>
            <td><?php echo $mesero['Mesero']['id']?></td>
            <td><?php echo $mesero['Mesero']['nombre']?></td>
            <td><?php echo $mesero['Mesero']['apellido']?></td>
            <td><?php 
            //Enlace a una función para enseñar todos los datos de los meseros.

            echo $this->Html->link('Datos Meseros',array('controller'=>'meseros','action'=>'ver',$mesero['Mesero']['id']));
            ?></td>
        </tr>
    <?php
        endforeach;
    ?>
     </table>
</body>
</html>