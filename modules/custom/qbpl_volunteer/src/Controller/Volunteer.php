<?php
namespace Drupal\qbpl_volunteer\Controller;

use Drupal\Core\Controller\ControllerBase;

class VolunteerController extends ControllerBase {
  public function content(){
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Volunteer with us today!'),
    );
  }
}