<?php
namespace Drupal\first_form\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends FormBase {
/**
* {@inheritdoc}
*/
public function getFormId()
{
return 'example_form';
}
/**
* {@inheritdoc}
*/
public function buildForm(array $form, FormStateInterface $formstate)
{
$form['candidate_name'] = [
  '#type' => 'textfield',
  '#title' => t('Candidate Name:'),
  '#required' => TRUE,
];
$form['candidate_mail'] = [
  '#type' => 'textfield',
  '#title' => t('Candidate Mail:'),
  '#required' => TRUE,
];
$form['submit'] = [
  '#type' => 'submit',
  '#value' => t('Save'),
];
return $form;
}
/**
* {@inheritdoc}
*/
public function validateForm(array &$form, FormStateInterface $formstate)
  {
    if(strlen($formstate->getValue('candidate_name')) < 6){
      $formstate->setErrorByname('candidate_name', "please make sure username length is more than 5");
    }
  }
/**
* {@inheritdoc}
*/
public function submitForm(array &$form, FormStateInterface $formstate)
  {
  }
}