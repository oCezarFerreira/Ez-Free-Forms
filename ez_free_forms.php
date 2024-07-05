<?php

/**
 * Plugin Name: Ez Free Forms
 * Plugin URI:
 * Description: Easy and free way to create forms for your site
 * Version: 0.0.1
 * Author: Cezar Ferreira
 * Author URI: 
 * License: GPL2
 */

if (!defined('WPINC')) {
    die;
}

define('EZ_FREE_FORMS_VERSION', '0.0.1');

require plugin_dir_path(__FILE__) . "controllers/ezff_controllers_runner.php";
require plugin_dir_path(__FILE__) . "ezff_activation.php";
require plugin_dir_path(__FILE__) . "ezff_deactivation.php";

ezff_activation(plugin_dir_path(__FILE__));
ezff_deactivation(plugin_dir_path(__FILE__));

run_ezff_forms();
