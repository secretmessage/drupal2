<?php

namespace Drupal\newyork1_aboutus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\newyork1_aboutus\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Getaboutmepage.
   *
   * @return array
   *   Return Hello string.
   */
  public function getAboutMePage() {
    return [
      '#theme' => 'newyork1_aboutus',
      '#title' => 'About Us'
    ];
  }

}
