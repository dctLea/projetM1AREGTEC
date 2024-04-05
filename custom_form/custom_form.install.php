<?php

/**
* Implement the schema hook
**/

function custom_form_schema() {
    $schema['user_details'] = [
        'description' => 'contains user_details',
        'fields' => [
            'Prenom'=>[
                'description'=>'Contient le prénom',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            'Nom'=>[
                'description'=>'Contient le nom',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            'Telephone'=>[
                'description'=>'Contient le numéro de téléphone',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            'Mail'=>[
                'description'=>'Contient l email',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            'Adresse'=>[
                'description'=>'Contient l adresse',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            'Race'=>[
                'description'=>'Contient la race',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
        ],
        // 'primary key'=>['id'],
    ];

    $schema['test_mlr'] = [
        'description' => 'TEST',
        'fields' => [
            'XXX'=>[
                'description'=>'Contient xxx',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            'YYY'=>[
                'description'=>'Contient yyy',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            'RACE'=>[
                'description'=>'Contient race',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
        ],
        // 'primary key'=>['id'],
    ];

    return $schema;
}