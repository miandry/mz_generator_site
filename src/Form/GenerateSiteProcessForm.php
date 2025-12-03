<?php

namespace Drupal\mz_generator_site\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Core\Entity\EntityInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;


/**
 * Class SiteSettingForm.
 */
class GenerateSiteProcessForm extends FormBase {



  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'mz_generator_site_process';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
 
    $current_url = \Drupal::service('path.current')->getPath();
    $alias = \Drupal::service('path_alias.manager')->getAliasByPath( $current_url);
    $site_new = \Drupal::request()->query->get('site_new');
    $form['nid'] = [
      '#type' => 'hidden',
      '#value' =>  $site_new,
    ];
    $form['alias'] = [
      '#type' => 'hidden',
      '#value' =>   $alias ,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save and continue'),
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
   
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $alias =  $values["alias"];

  }

}
