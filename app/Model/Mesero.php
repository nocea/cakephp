<?php
class Mesero extends AppModel{
    //para la validación tendremos que usar SÓLO esta variable con ese nombre.
    public $validate=array(
        'dni'=>array(
            'notBlank'=>array(
                'rule'=>'notBlank'
            ),
            'numeric'=>array(
                'rule'=>'numeric',
                'message'=>'Solo Números'
            ),
            'unique'=>array(
                'rule'=>'isUnique',
                'message'=>'Este dni ya existe en nuestra base de datos'
            )
        ),
        'nombre'=>array(
            'rule'=>'notBlank',
        ),
        'apellido'=>array(
            'rule'=>'notBlank'
        ),
        'telefono'=>array(
            'notBlank'=>array(
                'rule'=>'notBlank'
            ),
            'numeric'=>array(
                'rule'=>'numeric',
                'message'=>'Solo Números'
            )
        )
    );

}
?>