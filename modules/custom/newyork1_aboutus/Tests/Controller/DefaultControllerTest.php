<?php

namespace Drupal\newyork1_aboutus\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the newyork1_aboutus module.
 */
class DefaultControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "newyork1_aboutus DefaultController's controller functionality",
      'description' => 'Test Unit for module newyork1_aboutus and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests newyork1_aboutus functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module newyork1_aboutus.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
