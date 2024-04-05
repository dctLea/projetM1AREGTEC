<?php

namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomTESTMLR extends FormBase {
    public function getFormId() {
        return "My_customTESTMLR";
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['xxx'] = [
            '#type' => 'textfield',
            '#title' => 'XXX',
            '#required' => true,
        ];

        $form['yyy'] = [
            '#type' => 'textfield',
            '#title' => 'YYY',
            '#required' => true,
        ];

        $form['race'] = [
            '#type' => 'select',
            '#title' => 'Race',
            '#options' => [
                "yo" => "oui",
                "nai" => "non"
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
        \Drupal::database()->insert('test_mlr')->fields([
            'XXX' => $values['xxx'],
            'YYY' => $values['yyy'],
            'RACE' => $values['race'],
        ])->execute();
    }
}
