<?php

namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomUserDetails extends FormBase {
    public function getFormId() {
        return "custom_user_details_form";
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['Prenom'] = [
            '#type' => 'textfield',
            '#title' => 'Prenom',
            '#required' => true,
        ];

        $form['Nom'] = [
            '#type' => 'textfield',
            '#title' => 'Nom',
            '#required' => true,
        ];

        $form['Telephone'] = [
            '#type' => 'textfield',
            '#title' => 'Telephone',
            '#required' => true,
        ];

        $form['Adresse'] = [
            '#type' => 'textfield',
            '#title' => 'Adresse',
            '#required' => true,
        ];

        $form['usermail'] = [
            '#type' => 'email',
            '#title' => 'Email',
            '#required' => true,
        ];

        $form['Race'] = [
            '#type' => 'select',
            '#title' => 'Race',
            '#options' => [
                "Oui" => "oui",
                "Non" => "non"
            ],
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
        \Drupal::database()->insert('user_details')->fields([
            'Prenom' => $values['Prenom'],
            'Nom' => $values['Nom'],
            'Telephone' => $values['Telephone'],
            'Adresse' => $values['Adresse'],
            'Email' => $values['usermail'], 
            'Race' => $values['Race']
        ])->execute();
    }
}
