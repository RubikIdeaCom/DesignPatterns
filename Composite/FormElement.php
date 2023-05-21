<?php
/**
 * The base Component class declares an interface for all concrete components,
 * both simple and complex.
 *
 * In our example, we'll be focusing on the rendering behavior of DOM elements.
 */
interface FormElement
{
    public function getName(): string;

    public function setData($data): void;

    public function getData(): array;

    /**
     * Each concrete DOM element must provide its rendering implementation, but
     * we can safely assume that all of them are returning strings.
     */
    public function render(): string;
}