<?php

namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomDogInformation extends FormBase {
    public function getFormId() {
        return "form_dog_information";
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['NomAnimal'] = [
            '#type' => 'textfield',
            '#title' => 'Nom de l animal',
            '#required' => true,
        ];

        $form['race'] = [
            '#type' => 'select',
            '#title' => 'Race',
            '#options' => [
                "Berger allemand" => "Berger allemand",
                "Teckel" => "Teckel"
            ],
        ];

        $form['NumeroLOF'] = [
            '#type' => 'textfield',
            '#title' => 'Numéro LOF',
            '#required' => true,
        ];

        $form['NumeroID'] = [
            '#type' => 'textfield',
            '#title' => 'Numéro identification',
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
            'Usr_mail' => $values['Mail']
        ])->execute();

        \Drupal::database()->insert('admin_users')->fields([
            'AdmUsr_Login' => $values['Mot_de_passe']
        ])->execute();


    }
}

