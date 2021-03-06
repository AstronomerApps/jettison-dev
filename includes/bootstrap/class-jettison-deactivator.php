<?php
/**
 * Code that is run during the deactivation of the plugin
 *
 * @since 0.0.1
 * @package Jettison
 * @subpackage Jettison/includes/bootstrap
 */
class Jettison_Deactivator {
  public function deactivate() {
    add_action( 'admin_notices', array( 'Jettison_Notices', 'deactivate_notice__success' ));
  }
}