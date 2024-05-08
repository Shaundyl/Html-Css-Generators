<?php

echo "<!DOCTYPE html>\n";

require_once __DIR__ . '/../../html/src/HtmlGenerator/HtmlGenerator.php';

use HtmlGenerator\HtmlGenerator;

// Create HTML structure
$html = HtmlGenerator::create('html')
    ->addChild(
        HtmlGenerator::create('head')
            ->addChild(
                HtmlGenerator::create('title')
                    ->setContent('Page Title')
            )
    )
    ->addChild(
        HtmlGenerator::create('body')
            ->addChild(
                HtmlGenerator::create('div')
                    ->setAttribute('class', 'header_section')
                    ->addChild(
                        HtmlGenerator::create('div')
                            ->setAttribute('class', 'container-fluid')
                            ->addChild(
                                HtmlGenerator::create('nav')
                                    ->setAttribute('class', 'navbar navbar-expand-lg navbar-light bg-light')
                                    ->addChild(
                                        HtmlGenerator::create('div')
                                            ->setAttribute('class', 'logo')
                                            ->addChild(
                                                HtmlGenerator::create('a')
                                                    ->setAttribute('href', 'index.html')
                                                    ->addChild(
                                                        HtmlGenerator::create('img')
                                                            ->setAttribute('src', 'images/logo.png')
                                                    )
                                            )
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('button')
                                            ->setAttribute('class', 'navbar-toggler')
                                            ->setAttribute('type', 'button')
                                            ->setAttribute('data-toggle', 'collapse')
                                            ->setAttribute('data-target', '#navbarNav')
                                            ->setAttribute('aria-controls', 'navbarNav')
                                            ->setAttribute('aria-expanded', 'false')
                                            ->setAttribute('aria-label', 'Toggle navigation')
                                            ->addChild(
                                                HtmlGenerator::create('span')
                                                    ->setAttribute('class', 'navbar-toggler-icon')
                                            )
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('div')
                                            ->setAttribute('class', 'collapse navbar-collapse')
                                            ->setAttribute('id', 'navbarNav')
                                            ->addChild(
                                                HtmlGenerator::create('ul')
                                                    ->setAttribute('class', 'navbar-nav ml-auto')
                                                    ->addChild(
                                                        HtmlGenerator::create('li')
                                                            ->setAttribute('class', 'nav-item active')
                                                            ->addChild(
                                                                HtmlGenerator::create('a')
                                                                    ->setAttribute('class', 'nav-link')
                                                                    ->setAttribute('href', 'index.html')
                                                                    ->setContent('Home')
                                                            )
                                                    )
                                                    ->addChild(
                                                        HtmlGenerator::create('li')
                                                            ->setAttribute('class', 'nav-item')
                                                            ->addChild(
                                                                HtmlGenerator::create('a')
                                                                    ->setAttribute('class', 'nav-link')
                                                                    ->setAttribute('href', 'about.html')
                                                                    ->setContent('About Us')
                                                            )
                                                    )
                                                    ->addChild(
                                                        HtmlGenerator::create('li')
                                                            ->setAttribute('class', 'nav-item')
                                                            ->addChild(
                                                                HtmlGenerator::create('a')
                                                                    ->setAttribute('class', 'nav-link')
                                                                    ->setAttribute('href', 'gallery.html')
                                                                    ->setContent('Gallery')
                                                            )
                                                    )
                                                    ->addChild(
                                                        HtmlGenerator::create('li')
                                                            ->setAttribute('class', 'nav-item')
                                                            ->addChild(
                                                                HtmlGenerator::create('a')
                                                                    ->setAttribute('class', 'nav-link')
                                                                    ->setAttribute('href', 'services.html')
                                                                    ->setContent('Services')
                                                            )
                                                    )
                                                    ->addChild(
                                                        HtmlGenerator::create('li')
                                                            ->setAttribute('class', 'nav-item')
                                                            ->addChild(
                                                                HtmlGenerator::create('a')
                                                                    ->setAttribute('class', 'nav-link')
                                                                    ->setAttribute('href', 'contact.html')
                                                                    ->setContent('Contact Us')
                                                            )
                                                    )
                                                    ->addChild(
                                                        HtmlGenerator::create('li')
                                                            ->setAttribute('class', 'nav-item')
                                                            ->addChild(
                                                                HtmlGenerator::create('a')
                                                                    ->setAttribute('class', 'nav-link')
                                                                    ->addChild(
                                                                        HtmlGenerator::create('i')
                                                                            ->setAttribute('class', 'fa fa-search')
                                                                            ->setAttribute('aria-hidden', 'true')
                                                                    )
                                                            )
                                                    )
                                            )
                                    )
                            )
                    )
            )
    )
    ->render();

// Output the HTML content
echo $html;


// Get the output buffer contents and clean the buffer
$htmlContent = ob_get_clean();

// Output the captured HTML content to the main script
return $htmlContent;
