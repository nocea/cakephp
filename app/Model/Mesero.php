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