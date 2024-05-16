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

    $schema['usr_user'] = [
        'description' => 'Contient l adresse mail de l utilisateur',
        'fields' => [
            'Usr_mail'=>[
                'description'=>'Contient le mail',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            'Usr_Firstname'=>[
                'description'=>'Contient le prénom',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            'Usr_Name'=>[
                'description'=>'Contient le nom de l utilisateur',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            //Modifier le nom de la colonne pour le téléphone
            // 'Usr_Phone'=>[
            //     'description'=>'Contient le numéro de téléphone',
            //     'type'=> 'varchar',
            //     'length'=>15, // Longueur suffisante pour les numéros de téléphone
            //     'not null'=>true,
            //     'constraint'=>'CHECK (Usr_Phone ~ \'^[0-9]+$\')' // Contrainte de format avec une expression régulière
            // ],
            
            //Modifier le nom de la colonne pour l'adresse
            // 'Usr_Address'=>[
            //     'description'=>'Contient l adresse de l utilisateur',
            //     'type'=> 'varchar',
            //     'length'=>50,
            //     'not null'=>true,
            // ],
        ],
        // 'primary key'=>['id'],
    ];

    //A modifier ou supprimer si le mot de passe est dans la table usr_user
    $schema['admin_users'] = [
        'description' => 'Contient le mot de passe de l utilisateur',
        'fields' => [
            'AdmUsr_Login'=>[
                'description'=>'Contient le mot de passe',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
        ],
        // 'primary key'=>['id'],
    ];


    //A modifier ou supprimer si le mot de passe est dans la table usr_user
    $schema['subjects'] = [
        'description' => 'Contient les informations de l animal',
        'fields' => [
            'Sub_Birth'=>[
                'description'=>'Contient la date de naissance',
                'type'=> 'date',
                'not null'=>true,
            ],
            'Sub_LOF'=>[
                'description'=>'Contient le LOF',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            'Sub_IDnumber'=>[
                'description'=>'Contient l identifiant de l animal',
                'type'=> 'varchar',
                'length'=>50,
                'not null'=>true,
            ],
            //Lignes correspondant au caractéristique de l'animal (diapo4 et 7) (à modifier en fonction de la base de données)

            // 'Sub_Name'=>[
            //     'description'=>'Contient le nom de l animal',
            //     'type'=> 'varchar',
            //     'length'=>50,
            //     'not null'=>true,
            // ],

            //'Sub_Age'=[
            //    'desciption' =>'Contient l age de l animal',
            //    'type'=>'integer',
            //    '#required' => true,
            //]

            // 'Sub_Weight'=>[
            //     'description'=>'Contient le poids de l animal',
            //     'type'=> 'floatval',
            //     'not null'=>true,
            // ],

            // 'Sub_Size'=>[
            //     'description'=>'Contient la taille au garot (cm) de l animal',
            //     'type'=> 'integer',
            //     'not null'=>true,
            // ],
            // 'Sub_BodyScore' =>[
            //     'description'=>'Contient le score corporelle de l animal'
            //     'type'=> 'checkboxes',
            //     'not null' => true,
            // ]
            
        
        ],
        // 'primary key'=>['id'],
    ];

    return $schema;
}