<?php

namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomUserDetails extends FormBase {
    public function getFormId() {
        return "custom_second_dog_details";
    }

    public function buildForm(array $form, FormStateInterface $form_state) 

        $form['imageA'] = [
            '#type' => 'inline_template',
            '#template' => '<img src="{{ bodyscore.jpg }}" alt="BodyScore">',
            '#context' => [
                'image_url' => '.../Docker/Drupal/module/custom_form/BodyScoreimg.jpg', // chemin d'accès vers l'image de score corporelle 
            ],
        ];

        $form['imageB'] = [
            '#type' => 'inline_template',
            '#template' => '<img src="{{ alopecie.jpg }}" alt="alopecie">',
            '#context' => [
                'image_url' => '.../Docker/Drupal/module/custom_form/alopecie.jpg', // chemin d'accès vers l'image de score corporelle 
            ],
        ];

        $form['Age'] = [
            '#type' => 'textfield',
            '#title' => 'Age',
            '#required' => true,
        ];
    
        $form['weight'] = [
            '#type' => 'textfield',
            '#title' => 'Weight',
            '#required' => true,
        ];
    
        $form['size'] = [
            '#type' => 'textfield',
            '#title' => 'Size',
            '#required' => true,
        ];
    
        $form['BodyScore'] = [
            '#type' => 'checkboxes',
            '#title' => 'BodyScore',
            '#options' => [
                'maigreur' => 'Maigreur',
                'minceur' => 'Minceur',
                'poids_ideal' => 'Poids idéal',
                'surcharge_pondérale' => 'Surcharge pondérale',
                'obesite_marquee' => 'Obésité marquée',
            ],
            '#required' => true,
        ];
        $form['poilS']=[
            '#type' => 'checkboxes',
            '#title' => 'PoilS',
            '#Option' =>[
                'sec' => 'Sec',
                'terne' => 'Terne'
            ],
            '#required' => true,
        ];

        $form['poilG']=[
            '#type' => 'chekboxes',
            '#title' => 'poilG',
            '#Option' => [
                'oui' => 'Oui',
                'non' => 'Non',
            ],
            '#required' => true,
        ];

        $form['Pellicules'] = [ 
            '#type' => 'checkboxes',
            '#title' => 'pellicules',
            '#Option' => [
                'oui' => 'Oui',
                'non' => 'Non',
            ],
            '#required' => true,
        ];

        $form['commPeau'] =[
            '#type'=> 'textfield',
            '#title' => 'commentaire peau',
            '#required' => true,
    
        ];

        $form['oreilles'] = [
            '#type' => 'checkboxes',
            '#title' => 'pellicules',
            '#Option' => [
                'propres' => 'Propres',
                'sales' => 'Sales',
                'odorantes' => 'Odorantes',
                'douloureuses' => 'Douloureuses',
            ],
            '#required' => true,
        ];

        $form['commOreilles'] =[
            '#type'=> 'textfield',
            '#title' => 'commentaire Oreilles',
            '#required' => true,
    
        ];

        $form['yeux'] = [
            '#type' => 'checkboxes',
            '#title' => 'yeux',
            '#Option' => [
                'propres' => 'Propres',
                'sales' => 'Sales',
                'collants' => 'Collants',
                'douloureuses' => 'Douloureuses',
                'voiles' => 'Voilés',
            ],
            '#required' => true,
        ];

        $form['commYeux'] =[
            '#type'=> 'textfield',
            '#title' => 'commentaire Oreilles',
            '#required' => true,
    
        ];

        $form['truffe'] = [
            '#type' => 'checkboxes',
            '#title' => 'Truffe',
            '#Option' => [
                'lisse' => 'Lisse',
                'rugeuse' => 'Rugeuse',
                'craquelee' => 'Craquelee',
            ],
            '#required' => true,
        ];

        $form['commTruffe'] =[
            '#type'=> 'textfield',
            '#title' => 'commentaire Truffe',
            '#required' => true,
        ];

        $form['densitePeau'] = [
            '#type' => 'checkboxes',
            '#title' => 'Truffe',
            '#Option' => [
                'fine' => 'Fine',
                'epaisse' => 'Epaisse',
                'normale' => 'Normale',
            ],
            '#required' => true,
        ];

        $form['alopecie'] = [
            '#type' => 'checkboxes',
            '#title' => 'alopecie',
            '#Option' => [
                'normale' => 'Normale',
                'faible' => 'Faible',
                'moderee' => 'Moderee',
                'severe' => 'Severe',
            ],
            '#required' => true,
        ];

        $form['commAlopecie'] =[
            '#type'=> 'textfield',
            '#title' => 'commentaire Alopecie',
            '#required' => true,
        ];
        
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->('Submit'),
        ];
    
        return $form;
    }
    
    public function validateForm(array &$form, FormStateInterface $form_state) {
        // Ajouter une logique de validation si nécessaire.
    }
    
    public function submitForm(array &$form, FormStateInterface $form_state) {
        \Drupal::messenger()->addMessage("User details submitted successfully");
        $values = $form_state->getValues();
        // Insérer les valeurs dans la base de données.
        // a mettre à jour avec la base de donnée
    //     \Drupal::database()->insert('user_details')->fields([
    //         'Age' => $values['Age'],
    //         'Weight' => $values['weight'],
    //         'Size' => $values['size'],
    //         'BodyScore' => implode(',', $values['table']), // Converting array to comma-separated string.
    //         'poilS' => implode(',', $values['table']), 
    //         'poilG' => implode(',', $values['table']), 
    //         'Pellicules' => implode(',', $values['table']), 
                // 'commPeau' => $values['table'],
                // 'oreilles' => implode(',', $values['table']),
                // 'commOreilles' => $values['table'],
                // 'yeux' => implode(',', $values['table']),
                // 'commYeux' => $values['table'],
                // 'truffe' => implode(',', $values['table']),
                // 'commTruffe' => $values['table'],
                // 'alopecie' => implode(',', $values['table']),
                // 'commAlopecie' => $values['table'],

    //     ])->execute();
    // }
    
    }
}