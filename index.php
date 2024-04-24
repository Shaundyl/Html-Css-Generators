<?php

require_once 'HtmlGenerator.php';
use MyNamespace\HtmlGenerator;

$htmlGenerator = new HtmlGenerator();

$html = $htmlGenerator->addTitle('Generated HTML')
                     ->addCss('styles.css')
                     ->addMeta('description', 'Generated HTML document')
                     ->openBody()
                     ->addDiv('container', '<h1>Hello, world!</h1><p>This is a paragraph.</p>')
                     ->addTable(['border' => '1'], [['Name', 'Age'], ['John', '30'], ['Jane', '25']])
                     ->addH1('text-align:center', 'color: blue; font-size: 24px;')
                     ->closeBody()
                     ->generate();

$file = fopen('generated_html.html', 'w');
fwrite($file, $html);
fclose($file);

// Render the HTML to the browser
$htmlGenerator->render();
