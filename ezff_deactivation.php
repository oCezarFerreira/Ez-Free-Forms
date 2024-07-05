<?php
function ezff_deactivation(string $pluginPath)
{
  register_deactivation_hook($pluginPath, "ezff_deactivate_plugin");
}

function ezff_deactivate_plugin()
{
}
