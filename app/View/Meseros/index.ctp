<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meseros</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
</head>

<body>
    <h1>Index Meseros</h1>
    <h2>Lista de Meseros</h2>
    </div>
    <?php echo $this->Html->link('Crear Mesero', array('controller' => 'meseros', 'action' => 'nuevo'));
    ?>
    <input type="text" id="searchMesero" placeholder="Buscar mesero...">
    <script>
        $(document).ready(function() {
            $("#searchMesero").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "<?php echo $this->Html->url(array('controller' => 'meseros', 'action' => 'search')); ?>",
                        type: "GET",
                        data: {
                            q: request.term
                        },
                        dataType: "json",
                        success: function(data) {
                            response($.map(data, function(mesero) {
                                return {
                                    label: mesero.Mesero.nombre,
                                    value: mesero.Mesero.nombre
                                };
                            }));
                        }
                    });
                },
                minLength: 2
            });
        });
    </script>
    <table class="table table-primary">
        <tr>
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">apellidos</th>
            <th scope="col">Datos</th>
            <th scope="col"> Editar</th>
            <th scope="col"> Eliminar</th>
        </tr>

        <?php
        foreach ($meseros as $mesero):

        ?>
            <tr>
                <td><?php echo $mesero['Mesero']['id'] ?></td>
                <td><?php echo $mesero['Mesero']['nombre'] ?></td>
                <td><?php echo $mesero['Mesero']['apellido'] ?></td>
                <td><?php echo $this->Html->link('Datos Meseros', array('controller' => 'meseros', 'action' => 'ver', $mesero['Mesero']['id'])); ?></td>
                <td><?php echo $this->Html->link('Editar Datos', array('controller' => 'meseros', 'action' => 'editar', $mesero['Mesero']['id'])); ?></td>
                <td><?php echo $this->Form->postLink('Eliminar', array('action' => 'eliminar', $mesero['Mesero']['id']), array('confirm' => 'Eliminar a ' . $mesero['Mesero']['nombre'] . '?')) ?></td>

            </tr>
        <?php
        endforeach;
        ?>
    </table>
</body>

</html>