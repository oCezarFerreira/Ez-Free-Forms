<?php
require_once plugin_dir_path(__FILE__) . "../../models/BasicForm.php";
require_once plugin_dir_path(__FILE__) . "../../models/FormField.php";

$field = new FormField(0, "Test", "ez_test", "", []);
$form = new BasicForm(0, "Teste", "ez_test", "", [$field]);
?>

<form>
    <h1><?= $form->title ?></h1>
    <label for="<?= $form->fields[0]->html_id ?>"><?= $form->fields[0]->label ?></label>
    <input type="text" id="<?= $form->fields[0]->html_id ?>">
</form>