<?php

/**
* Implement the schema hook
**/

function custom_form_schema() {
    $schema['dog_details'] = [
    'description' => 'contains dog_details',
    'fields' => [
        'id'=>[
            'description'=>'Contient les identifiants',
            'type'=> 'serial',
            'not null'=>true,
            'unsigned'=>true
        ],
        'Nom'=>[
            'description'=>'Contient le nom du chien',
            'type'=> 'varchar',
            'length'=>50,
            'not null'=>true,
        ],
        'Race'=>[
            'description'=>'Contient la race du chien',
            'type'=> 'varchar',
            'length'=>50,
            'not null'=>true,
        ],
        'NumLOF'=>[
            'description'=>'Contient le numéro de LOF du chien',
            'type'=> 'numerique',
            'length'=>50,
         ],
        'NumID'=>[
            'description'=>'Contient le numero d identification du chien',
            'type'=> 'numerique',
            'length'=>50,
            'not null'=>true,
        ],
        'DDN'=>[
            'description'=>'Contient la date de naissance',
            'type'=> 'date',
            'length'=>50,
            'not null'=>true,
        ],
        'age'=>[
            'description'=>'Contient l age du chien',
            'type'=> 'numerique',
            'length'=>50,
            'not null'=>true,
        ],
        'poids'=>[
            'description'=>'Contient le poids du chien',
            'type'=> 'numerique',
            'length'=>50,
            'not null'=>true,
        ],
        'taillegarot'=>[
            'description'=>'Contient la taille au garot du chien',
            'type'=> 'numerique',
            'length'=>50,
            'not null'=>true,
        ],
        /**
* mettre le reste de la diapo 5
**/
    ],
    'primary key'=>['id'],
];

}