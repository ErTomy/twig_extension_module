<?php

/**
 * @file
 * Contains \Drupal\twig_extension_ertomy\TwigExtensionErtomyController.
 */

namespace Drupal\twig_extension_ertomy;

use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Controller routines for Twig extension ertomy routes.
 */
class TwigExtensionErtomyController {
  use StringTranslationTrait;

  /**
   * callback for via celere in a Twig template.
   */
  public function ertomyFilterRender() {
    return array(
      '#theme' => 'twig_extension_ertomy_filter',
      '#message' => 'Prueba',
      '#safe_join_items' => []
    );
  }

  /**
   * callback for Via Celere Twig functions in a Twig template.
   */
  public function ertomyFunctionRender() {
    return array('#theme' => 'twig_extension_ertomy_function');
  }

}
