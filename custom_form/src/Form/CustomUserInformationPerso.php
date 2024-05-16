<?php

namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomUserInformationPerso extends FormBase {
    public function getFormId() {
        return "form_information_perso";
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['Prenom'] = [
            '#type' => 'textfield',
            '#title' => 'Prénom',
            '#required' => true,
        ];

        $form['Nom'] = [
            '#type' => 'textfield',
            '#title' => 'Nom',
            '#required' => true,
        ];

        $form['Telephone'] = [
            '#type' => 'textfield',
            '#title' => 'Téléphone',
            '#required' => true,
        ];
        
        $form['Adresse'] = [
            '#type' => 'textfield',
            '#title' => 'Adresse',
            '#required' => true,
        ];

        $form['Envoyer'] = [
            '#type' => 'submit',
            '#value' => 'submit',
        ];

        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
        // Validation logic can be added here if needed.
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        \Drupal::messenger()->addMessage("User details submitted successfully");
        $values = $form_state->getValues();
        \Drupal::database()->insert('usr_user')->fields([
            'Usr_Firstname' => $values['Prenom'],
            'Usr_Name' => $values['Nom']//,
            //A modifier en fonction du nom des colonnes de la table usr_user
            //'Usr_Phone' => $values['Telephone'],
            //'Usr_Address' => $values['Adresse']
        ])->execute();

    }
}

