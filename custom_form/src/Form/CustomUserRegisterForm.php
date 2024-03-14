<?php

namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomUserRegisterForm extends FormBase {
    public function getFormId() {
        return 'custom_user_register_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['email'] = [
            '#type' => 'email',
            '#title' => $this->t('Email'),
            '#required' => TRUE,
        ];

        $form['password'] = [
            '#type' => 'password',
            '#title' => $this->t('Password'),
            '#required' => TRUE,
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
        ];

        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
        // Add validation logic here if needed.
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        // Get form values.
        $values = $form_state->getValues();

        // Save user details to the database.
        \Drupal::database()->insert('user_details')->fields([
            'Email' => $values['email'],
            // You may add other fields here.
        ])->execute();

        // Optionally, you can redirect the user after form submission.
        $form_state->setRedirect('<front>');
    }
}
