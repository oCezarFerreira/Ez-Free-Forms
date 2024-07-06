<?php

/**
 * Create table "ezff_forms" with the following columns:
 *  Id(int)
 *  title(varchar(50))
 *  html_id(varchar(100))
 *  class(text)
 *  fields(json)
 */

function ezff_activate_plugin()
{
  global $wpdb;

  $table_name = $wpdb->prefix . "ezff_form";
  $charset = $wpdb->get_charset_collate();

  $query = "CREATE TABLE $table_name (
      id int NOT NULL AUTO_INCREMENT,
      title varchar(50),
      html_id varchar(100),
      class text,
      fields json,
      PRIMARY KEY  (id)
    ) $charset;";

  require_once ABSPATH . 'wp-admin/includes/upgrade.php';
  dbDelta($query);
}
