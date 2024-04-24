<?php

namespace MyNamespace;


class HtmlGenerator
{
    protected $html = '';

    public function __construct()
    {
        $this->html .= "<!DOCTYPE html>\n<html>\n<head>\n";
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

    public function openDiv($class = '', $content = ''){
        $this->html .= "<div class=\"$class\"> $content\n";
        return $this;
    }

    public function closeDiv(){
        $this->html .= "</div>";
        return $this;
    }
    
    // Method to add a div element
    public function addDiv($class = '', $content = '')
    {
        $this->html .= "<div class=\"$class\">$content</div>\n";
        return $this;
    }

    public function addH1($content, $style = '')
    {
        $styleAttr = $style ? "style=\"$style\"" : '';
        $this->html .= "<h1 $styleAttr>$content</h1>\n";
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
}


