<?php declare(strict_types = 1);

namespace ticketPHP\Template;

interface Renderer
{
    public function render($template, $data = []) : string;
}