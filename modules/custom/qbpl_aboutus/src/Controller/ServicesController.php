<?php

namespace Drupal\qbpl_aboutus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ServicesController.
 *
 * @package Drupal\qbpl_aboutus\Controller
 */
class ServicesController extends ControllerBase {
  /**
   * Getindex.
   *
   * @return string
   *   Return Hello string.
   */
  public function getIndex() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: getIndex')
    ];
  }
  /**
   * Getcirculation.
   *
   * @return string
   *   Return Hello string.
   */
  public function getCirculation() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: getCirculation')
    ];
  }
  /**
   * Getcomputers.
   *
   * @return string
   *   Return Hello string.
   */
  public function getComputers() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: getComputers')
    ];
  }
  /**
   * Gettablethotspot.
   *
   * @return string
   *   Return Hello string.
   */
  public function getTabletHotspot() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: getTabletHotspot')
    ];
  }
  /**
   * Getforeignpartnership.
   *
   * @return string
   *   Return Hello string.
   */
  public function getForeignPartnership() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: getForeignPartnership')
    ];
  }
  /**
   * Getselfpublishing.
   *
   * @return string
   *   Return Hello string.
   */
  public function getSelfPublishing() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: getSelfPublishing')
    ];
  }

}
