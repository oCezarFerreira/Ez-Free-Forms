<?php
require_once plugin_dir_path(__FILE__) . "./interfaces/FormInterface.php";

class BasicForm implements FormInterface
{
    public int $id;
    public string $title;
    public string $html_id;
    public string $class;
    public array $fields;

    public function __construct(
        int $id,
        string $title,
        string $html_id,
        string $class,
        array $fields
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->html_id = $html_id;
        $this->class = $class;
        $this->fields = $fields;
    }
}
