<?php
class Ezff_Admin_Controller
{
  public function run()
  {
    add_action('admin_menu', array($this, 'add_plugin_admin_menu'));
    add_action('admin_enqueue_scripts', array($this, 'scriptsRegister'));

    // Ajax Handlers
    add_action('wp_ajax_ezff_get_forms', array($this, 'get_forms_handler'));
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


    wp_enqueue_script(
      "getForms",
      $jsBasepath . "getForms.js",
      array('jquery'),
      1.0,
      true
    );

    wp_localize_script(
      'getForms',
      'ez_free_forms',
      array(
        'ajax_url' => admin_url('admin-ajax.php'),
      )
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

  function get_forms_handler()
  {
    if (!current_user_can('read')) {
      wp_send_json_error(null, 401);
    }

    $data = array(
      'test' => 'HELLO AJAX!'
    );
    wp_send_json($data, 200);
  }
}
