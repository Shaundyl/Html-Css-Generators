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
                     ->addLink('https://example.com', 'Example', ['class' => 'example-link', 'target' => '_blank'])
                     ->addHeader(1, 'This is an h1 header', ['class' => 'header1'])
                     ->addHeader(2, 'This is an h2 header', ['id' => 'header2'])
                     ->addHeader(3, 'This is an h3 header', ['class' => 'header3'])
                     ->addButton('Click me', ['class' => 'btn', 'id' => 'btn1'])
                     ->addButton('Submit', ['class' => 'btn btn-primary', 'type' => 'submit'])
                     ->closeBody()
                     ->generate();

$file = fopen('generated_html.html', 'w');
fwrite($file, $html);
fclose($file);

// Render the HTML to the browser
$htmlGenerator->render();
