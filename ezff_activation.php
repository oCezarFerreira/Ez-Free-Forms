<?php
function ezff_activation(string $pluginPath)
{
  register_activation_hook($pluginPath, "ezff_activate_plugin");
}

function ezff_activate_plugin()
{
}
