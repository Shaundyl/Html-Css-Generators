<?php

require_once 'HtmlGenerator.php';
use MyNamespace\HtmlGenerator;

$htmlGenerator = new HtmlGenerator();

// Start the body
$htmlGenerator->openBody();

// Header section
$htmlGenerator->openDiv('header_section')
    ->openDiv('container-fluid')
        ->openNav('navbar navbar-expand-lg navbar-light bg-light')
            ->openDiv('logo')
            ->addLink('index.html', '<img src="images/logo.png" alt="Logo">', ['class' => 'logo-link'])
            ->closeDiv()
            ->addButton('<span class="navbar-toggler-icon"></span>', ['class' => 'navbar-toggler', 'type' => 'button', 'data-toggle' => 'collapse', 'data-target' => '#navbarNav', 'aria-controls' => 'navbarNav', 'aria-expanded' => 'false', 'aria-label' => 'Toggle navigation'])
            ->openDiv('collapse navbar-collapse', 'navbarNav')
                ->openUl('navbar-nav ml-auto')
                    ->openLi('nav-item active')
                        ->addLink('index.html', 'Home', ['class' => 'nav-link'])
                    ->closeLi()
                    ->openLi('nav-item')
                        ->addLink('about.html', 'About Us', ['class' => 'nav-link'])
                    ->closeLi()
                    ->openLi('nav-item')
                        ->addLink('gallery.html', 'Gallery', ['class' => 'nav-link'])
                    ->closeLi()
                    ->openLi('nav-item')
                        ->addLink('services.html', 'Services', ['class' => 'nav-link'])
                    ->closeLi()
                    ->openLi('nav-item')
                        ->addLink('contact.html', 'Contact Us', ['class' => 'nav-link'])
                    ->closeLi()
                    ->openLi('nav-item')
                        ->addLink('#', '<i class="fa fa-search" aria-hidden="true"></i>', ['class' => 'nav-link'])
                    ->closeLi()
                ->closeUl()
            ->closeDiv()
        ->closeNav()
    ->closeDiv();

// Close the body
$htmlGenerator->closeBody();

// Generate the final HTML string
$html = $htmlGenerator->generate();

$file = fopen('generated_html.html', 'w');
fwrite($file, $html);
fclose($file);

// Render the HTML to the browser
$htmlGenerator->render();
