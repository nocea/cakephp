<?php
class Mesa extends AppModel
{
    //public $belongsTo ='Mesero';relacion basica
    public $belongsTo = array(
        'Mesero' => array(
            'className' => 'Mesero',
            'foreignKey' => 'mesero_id'
        )
    );
    public $validate = array(
        'serie' => array(
            'notEmpty' => array(
                'rule' => 'notBlank'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Solo números'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'La serie de Mesa debe ser único'
            )
        ),
        'puestos' => array(
            'notEmpty' => array(
                'rule' => 'notBlank'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Solo números'
            ),
        ),
        'posicion' => array(
            'rule' => 'notBlank'
        )
    );
}
