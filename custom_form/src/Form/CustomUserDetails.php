<?php

namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomUserDetails extends FormBase {
    public function getFormId() {
        return "custom_user_details_form";
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['prenom'] = [
            '#type' => 'textfield',
            '#title' => 'Prenom',
            '#required' => true,
        ];

        $form['nom'] = [
            '#type' => 'textfield',
            '#title' => 'Nom',
            '#required' => true,
        ];

        $form['telephone'] = [
            '#type' => 'textfield',
            '#title' => 'Telephone',
            '#required' => true,
        ];

        $form['email'] = [
            '#type' => 'email',
            '#title' => 'Email',
            '#required' => true,
        ];

        $form['adresse'] = [
            '#type' => 'textfield',
            '#title' => 'Adresse',
            '#required' => true,
        ];

        $form['race'] = [
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
            'Prenom' => $values['prenom'],
            'Nom' => $values['nom'],
            'Telephone' => $values['telephone'],
            'Mail' => $values['email'],
            'Adresse' => $values['adresse'], 
            'Race' => $values['race'],
        ])->execute();
    }
}
