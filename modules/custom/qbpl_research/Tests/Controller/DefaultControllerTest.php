<?php

namespace Drupal\qbpl_research\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the qbpl_research module.
 */
class DefaultControllerTest extends WebTestBase {

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "qbpl_research DefaultController's controller functionality",
      'description' => 'Test Unit for module qbpl_research and controller DefaultController.',
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
   * Tests qbpl_research functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module qbpl_research.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
