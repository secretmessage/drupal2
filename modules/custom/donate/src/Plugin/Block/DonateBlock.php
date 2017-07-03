<?php

namespace Drupal\donate\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Donate' Block.
 *
 * @Block(
 *   id = "donate_block",
 *   admin_label = @Translation("Donate block"),
 *   category = @Translation("Donate World"),
 * )
 */
class DonateBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => '<a href="/">Donate</a>, world!',
    ];
  }

}