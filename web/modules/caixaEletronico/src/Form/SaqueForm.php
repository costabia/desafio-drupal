<?php

namespace Drupal\caixaEletronico\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SaqueForm extends FormBase {

  public function getFormId() {
    return 'saque_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['valor'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Valor a ser sacado'),
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Sacar'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $valor = (float) $form_state->getValue('valor'); 

    $cedulas_disponiveis = [100, 50, 10, 5, 2, 1];
  }
}
