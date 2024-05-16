<?php

namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomUserInscription extends FormBase {
    public function getFormId() {
        return "form_inscription";
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['Mail'] = [
            '#type' => 'textfield',
            '#title' => 'Mail',
            '#required' => true,
        ];

        $form['Mot_de_passe'] = [
            '#type' => 'textfield',
            '#title' => 'Mot de passe',
            '#required' => true,
        ];

        $form['Envoyer'] = [
            '#type' => 'submit',
            '#value' => 'Envoyer',
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

