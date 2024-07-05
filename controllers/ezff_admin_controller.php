<?php
class Ezff_Admin_Controller
{
  public function run()
  {
    add_action('admin_menu', array($this, 'add_plugin_admin_menu'));
    add_action('admin_enqueue_scripts', array($this, 'scriptsRegister'));
  }

  public function add_plugin_admin_menu()
  {
    add_menu_page(
      'Ez Free Forms',
      'Ez Free Forms',
      'manage_options',
      'ez_free_forms',
      array($this, 'display_plugin_admin_page'),
      'dashicons-text-page',
      26
    );
  }

  // Show index view from admin
  public function display_plugin_admin_page()
  {
    require_once plugin_dir_path(__FILE__) . "../views/admin/index.php";
  }

  // Execute all script resgister functions
  public function scriptsRegister($hook)
  {
    $this->jsRegister($hook);
    $this->cssRegister($hook);
  }

  // Register all js files for admin
  private function jsRegister($hook)
  {
    $jsBasepath = plugin_dir_url(__FILE__) . "../assets/js/admin/";

    wp_enqueue_script(
      "index",
      $jsBasepath . "index.js",
      array('jquery'),
      1.0,
      true
    );
  }

  // Register all css files for admin
  private function cssRegister($hook)
  {
    $cssBasepath = plugin_dir_url(__FILE__) . "../assets/css/admin/";

    wp_enqueue_style(
      'styles',
      $cssBasepath . 'styles.css',
    );
  }
}
