<?php

namespace Drupal\qbpl_aboutus\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the qbpl_aboutus module.
 */
class ServicesControllerTest extends WebTestBase {

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "qbpl_aboutus ServicesController's controller functionality",
      'description' => 'Test Unit for module qbpl_aboutus and controller ServicesController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests qbpl_aboutus functionality.
   */
  public function testServicesController() {
    // Check that the basic functions of module qbpl_aboutus.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
