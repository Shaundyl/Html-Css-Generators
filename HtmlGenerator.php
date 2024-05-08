<?php

namespace MyNamespace;


class HtmlGenerator
{
    protected $html = '';

    public function __construct()
    {
        $this->html .= "<!DOCTYPE html>\n<html>\n<head>\n";
    }

    public function openDiv($class = '', $id = '', $content = '')
    {
        $div = "<div";
        if (!empty($class)) {
            $div .= " class=\"$class\"";
        }
        if (!empty($id)) {
            $div .= " id=\"$id\"";
        }
        $div .= ">\n";
        $this->html .= $div; // Append to $this->html
        return $this; // Return $this to allow method chaining
    }
    



    public function closeDiv()
    {
        $this->html .= "</div>\n";
        return $this;
    }
    
//     public function addLink($url, $text, $attributes = [])
// {
//     $link = '<a href="' . htmlspecialchars($url) . '"';
//     foreach ($attributes as $key => $value) {
//         $link .= ' ' . htmlspecialchars($key) . '="' . htmlspecialchars($value) . '"';
//     }
//     $link .= '>' . htmlspecialchars($text) . '</a>';
//     $this->html .= $link . "\n";
//     return $this;
// }

public function addLink($href, $content, $attributes = []) {
    // Convert the content to HTML entities, but keep the angle brackets
    $content = htmlentities($content, ENT_NOQUOTES, 'UTF-8', false);
    $content = str_replace(['&lt;', '&gt;'], ['<', '>'], $content);

    // Start building the link
    $this->html .= '<a href="' . $href . '"';

    // Add any attributes
    foreach ($attributes as $key => $value) {
        $this->html .= ' ' . $key . '="' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '"';
    }

    // Add the content and close the tag
    $this->html .= '>' . $content . '</a>';

    return $this;
}

    // Method to add a title to the document
    public function addTitle($title)
    {
        $this->html .= "<title>$title</title>\n";
        return $this;
    }

    // Method to add CSS link to the document
    public function addCss($cssFile)
    {
        $this->html .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"$cssFile\">\n";
        return $this;
    }

    // Method to add meta tag to the document
    public function addMeta($name, $content)
    {
        $this->html .= "<meta name=\"$name\" content=\"$content\">\n";
        return $this;
    }

    // Method to open the body tag
    public function openBody()
    {
        $this->html .= "</head>\n<body>\n";
        return $this;
    }

    // Method to close the body tag
    public function closeBody()
    {
        $this->html .= "</body>\n</html>";
        return $this;
    }

    // public function openDiv($class = '', $content = ''){
    //     $this->html .= "<div class=\"$class\"> $content\n";
    //     return $this;
    // }

    // public function closeDiv(){
    //     $this->html .= "</div>";
    //     return $this;
    // }
    
    // Method to add a div element
    public function addDiv($class = '', $content = '')
    {
        $this->html .= "<div class=\"$class\">$content</div>\n";
        return $this;
    }

    
    // Method to add a table element
    public function addTable($attributes = [], $rows = [])
    {
        $table = '<table';
        foreach ($attributes as $key => $value) {
            $table .= " $key=\"$value\"";
        }
        $table .= ">\n";
        foreach ($rows as $row) {
            $table .= "<tr>\n";
            foreach ($row as $cell) {
                $table .= "<td>$cell</td>\n";
            }
            $table .= "</tr>\n";
        }
        $table .= "</table>\n";
        $this->html .= $table;
        return $this;
    }

    // Method to generate the HTML
    public function generate()
    {
        return $this->html;
    }

    // Method to render the HTML
    public function render()
    {
        echo $this->html;
    }


    public function addHeader($level, $text, $attributes = [])
    {
        $headerType = 'h' . $level;
        $header = '<' . $headerType;
        foreach ($attributes as $key => $value) {
            $header .= ' ' . htmlspecialchars($key) . '="' . htmlspecialchars($value) . '"';
        }
        $header .= '>' . htmlspecialchars($text) . '</' . $headerType . '>';
        $this->html .= $header . "\n";
        return $this;
    }

    // public function addButton($text, $attributes = [])
    // {
    //     $button = '<button';
    //     foreach ($attributes as $key => $value) {
    //         $button .= ' ' . htmlspecialchars($key) . '="' . htmlspecialchars($value) . '"';
    //     }
    //     $button .= '>' . htmlspecialchars($text) . '</button>';
    //     $this->html .= $button . "\n";
    //     return $this;
    // }

    public function addButton($content, $attributes = []) {
        // Start building the button
        $this->html .= '<button';

        // Add any attributes
        foreach ($attributes as $key => $value) {
            $this->html .= ' ' . $key . '="' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '"';
        }

        // Add the content and close the tag
        $this->html .= '>' . $content . '</button>';

        return $this;
    }

    public function addImg($src, $alt = '', $attributes = [])
    {
        $this->html .= "<img src=\"" . htmlspecialchars($src) . "\" alt=\"" . htmlspecialchars($alt) . "\"";
        foreach ($attributes as $key => $value) {
            $this->html .= " " . htmlspecialchars($key) . '="' . htmlspecialchars($value) . '"';
        }
        $this->html .= ">\n";
        return $this;
    }

    public function addParagraph($text, $class = '') {
        $paragraph = "<p";
        if (!empty($class)) {
            $paragraph .= " class=\"$class\"";
        }
        $paragraph .= ">$text</p>\n";
        $this->html .= $paragraph; // Append to $this->html
        return $this; // Return $this to allow method chaining
    }

    public function addNav()
    {
        $this->html .= "<nav";
        $this->html .= " class=\"navbar navbar-expand-lg navbar-light bg-light\"";
        $this->html .= ">\n";
        return $this;
    }

    public function openNav($classes = '') {
        $this->html .= '<nav class="' . $classes . '">';
        return $this;
    }

    public function closeNav() {
        $this->html .= '</nav>';
        return $this;
    }

    public function openUl($classes = '') {
        $this->html .= '<ul class="' . $classes . '">';
        return $this;
    }

    public function closeUl() {
        $this->html .= '</ul>';
        return $this;
    }

    public function openLi($classes = '') {
        $this->html .= '<li class="' . $classes . '">';
        return $this;
    }

    public function closeLi() {
        $this->html .= '</li>';
        return $this;
    }

}



