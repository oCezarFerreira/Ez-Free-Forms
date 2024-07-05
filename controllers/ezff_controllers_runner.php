<?php
/* 
  Execute "run" function of all controllers
*/

require_once plugin_dir_path(__FILE__) . "ezff_admin_controller.php";

function run_ezff_forms()
{
  $admin = new Ezff_Admin_Controller();
  $admin->run();
}
