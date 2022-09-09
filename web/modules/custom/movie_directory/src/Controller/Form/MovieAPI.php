<?php

namespace Drupal\movie_directory\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

Class MovieAPI extends FormBase {
    
    public function getFormId() {
        return 'Movie_api_config_page';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        $form = [];

        $form['api_base_url'] = [
            '#type' => 'textfield',
            '#title' => t('API base url'),
            '#description' => $this->t('This is the API Base URL'),
            '#required' => TRUE,
            '#default_value' => '',
        ];

        $form['api_key'] = [
            '#type' => 'textfield',
            '#title' => $this->t('API key (v3 auth)'),
            '#description' => $this->t('This is the api key that will be used to access the API.'),
            '#required' => TRUE,
            '#default_value' => '',
        ];

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
    
    }
}

