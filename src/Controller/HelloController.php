<?php
/**
 * @file
 * Contains \Drupal\hellodrupal\Controller\HelloController.
 * Please place this file under your example(module_root_folder)/src/Controller/
 */
namespace Drupal\hellodrupal\Controller;
/**
 * Provides route responses for the HelloDrupal module.
 */
class HelloController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function helloPage() {
    $element = array(
      '#markup' => 'Hello Drupal 8 is really Awesome!',
    );
    return $element;
  }
}
?>