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
            ->addChild(
                HtmlGenerator::create('link')
                    ->setAttribute('rel', 'stylesheet')
                    ->setAttribute('href', 'style.css')
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
            ->addChild(
                HtmlGenerator::create('div')
    ->setAttribute('class', 'banner_section layout_padding')
    ->addChild(
        HtmlGenerator::create('div')
            ->setAttribute('class', 'container')
            ->addChild(
                HtmlGenerator::create('div')
                    ->setAttribute('id', 'main_slider')
                    ->setAttribute('class', 'carousel slide')
                    ->setAttribute('data-ride', 'carousel')
                    ->addChild(
                        HtmlGenerator::create('div')
                            ->setAttribute('class', 'carousel-inner')
                            ->addChild(
                                // Carousel items
                                HtmlGenerator::create('div')
                                    ->setAttribute('class', 'carousel-item active')
                                    ->addChild(
                                        HtmlGenerator::create('div')
                                            ->setAttribute('class', 'row')
                                            ->addChild(
                                                HtmlGenerator::create('div')
                                                    ->setAttribute('class', 'col-sm-12')
                                                    ->addChild(
                                                        HtmlGenerator::create('div')
                                                            ->setAttribute('class', 'banner_taital')
                                                            ->addChild(
                                                                HtmlGenerator::create('h1')
                                                                    ->setAttribute('class', 'outstanding_text')
                                                                    ->setContent('Outstanding')
                                                            )
                                                            ->addChild(
                                                                HtmlGenerator::create('h1')
                                                                    ->setAttribute('class', 'coffee_text')
                                                                    ->setContent('Coffee Shop')
                                                            )
                                                            ->addChild(
                                                                HtmlGenerator::create('p')
                                                                    ->setAttribute('class', 'there_text')
                                                                    ->setContent('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,')
                                                            )
                                                            ->addChild(
                                                                HtmlGenerator::create('div')
                                                                    ->setAttribute('class', 'learnmore_bt')
                                                                    ->addChild(
                                                                        HtmlGenerator::create('a')
                                                                            ->setAttribute('href', '#')
                                                                            ->setContent('Learn More')
                                                                    )
                                                            )
                                                    )
                                            )
                                    )
                                    // Add other carousel items similarly
                            )
                    )
                    ->addChild(
                        // Carousel controls
                        HtmlGenerator::create('a')
                            ->setAttribute('class', 'carousel-control-prev')
                            ->setAttribute('href', '#main_slider')
                            ->setAttribute('role', 'button')
                            ->setAttribute('data-slide', 'prev')
                            ->addChild(
                                HtmlGenerator::create('i')
                                    ->setAttribute('class', 'fa fa-angle-left')
                            )
                    )
                    ->addChild(
                        HtmlGenerator::create('a')
                            ->setAttribute('class', 'carousel-control-next')
                            ->setAttribute('href', '#main_slider')
                            ->setAttribute('role', 'button')
                            ->setAttribute('data-slide', 'next')
                            ->addChild(
                                HtmlGenerator::create('i')
                                    ->setAttribute('class', 'fa fa-angle-right')
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
