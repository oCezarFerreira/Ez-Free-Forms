<?php
class FormField
{
    public int $id;
    public string $label;
    public string $html_id;
    public string $class;
    public array $attr;

    public function __construct(
        int $id,
        string $label,
        string $html_id,
        string $class,
        array $attr
    ) {
        $this->id = $id;
        $this->label = $label;
        $this->html_id = $html_id;
        $this->class = $class;
        $this->attr = $attr;
    }
}
