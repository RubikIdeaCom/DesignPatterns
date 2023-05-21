<?php

/**
 * This is a Leaf component. Like all the Leaves, it can't have any children.
 */
class Input implements FormElement
{
    private $type;
    private $title;
    private $name;
    private $data;

    public function __construct(string $name, string $title, string $type)
    {
        $this->name = $name;
        $this->title = $title;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }


    /**
     * Since Leaf components don't have any children that may handle the bulk of
     * the work for them, usually it is the Leaves who do the most of the heavy-
     * lifting within the Composite pattern.
     */
    public function render(): string
    {
        return "<label for=\"{$this->name}\">{$this->title}</label>\n" .
            "<input name=\"{$this->name}\" type=\"{$this->type}\" value=\"{$this->data}\">\n";
    }
}