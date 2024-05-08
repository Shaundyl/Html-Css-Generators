<?php

namespace HtmlGenerator;

require_once 'HtmlElement.php';

class HtmlGenerator
{
    public static function create($tag)
    {
        return new HtmlElement($tag);
    }
}
