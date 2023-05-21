<?php

/**
 * And so is the form element.
 */
class Form extends FieldComposite
{
    private $url;
    private $method;

    public function __construct(string $name, string $title, string $url, string $method = 'post')
    {
        parent::__construct($name, $title);
        $this->url = $url;
        $this->method = $method;
    }

    public function render(): string
    {
        $output = parent::render();
        return "<form action=\"{$this->url}\" method=\"{$this->method}\">\n
        <h3>{$this->title}</h3>\n{$output}<input type='submit'></form>\n";
    }
}