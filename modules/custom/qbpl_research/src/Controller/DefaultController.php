<?php

namespace Drupal\qbpl_research\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\qbpl_research\Controller
 */
class DefaultController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello with parameter(s): $name'),
    ];
  }

  /**
   * Goodbye.
   *
   * @return string
   *   Return Hello string.
   */
  public function goodbye($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: goodbye with parameter(s): $name'),
    ];
  }

}
