<?php
class Mesero extends AppModel{
    //Este campo no existe como tal en la base de datos pero lo uso para juntar el nombre y apellidos
    public $virtualFields=array('nombre_completo'=>'CONCAT(Mesero.nombre," ",Mesero.apellido)');
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

    //public $hasMany='Mesa'; asi seria la relacion por defecto
    public $hasMany=array(
            'Mesa'=> array(
                'className'=>'Mesa',
                'foreignKey'=>'mesero_id',
                'conditions'=>'',//para diferentes condiciones,lo dejo vacio para que me muestre todas las mesas de un mesero
                'order'=> 'Mesa.serie DESC',
                'depend'=> false //Cuando esta en true si eliminamos un mesero se eliminan todas sus mesas.
            )
    );
}
?>