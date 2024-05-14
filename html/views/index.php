<?php

require_once __DIR__ . '/../../html/src/HtmlGenerator/HtmlGenerator.php';

use HtmlGenerator\HtmlGenerator;

// Start output buffering
ob_start();

// Print the DOCTYPE declaration
echo "<!DOCTYPE html>\n";

// Create HTML structure
$html = HtmlGenerator::create('html')
    ->setAttribute('lang', 'en')
    ->addChild(
        HtmlGenerator::create('head')
            ->addChild(
                HtmlGenerator::create('meta')
                    ->setAttribute('charset', 'UTF-8')
            )
            ->addChild(
                HtmlGenerator::create('meta')
                    ->setAttribute('name', 'viewport')
                    ->setAttribute('content', 'width=device-width, initial-scale=1.0')
            )
            ->addChild(
                HtmlGenerator::create('title')
                    ->setContent('USJR EDP CENTER')
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
                HtmlGenerator::create('nav')
                    ->addChild(
                        HtmlGenerator::create('div')
                            ->setAttribute('class', 'logo')
                            ->addChild(
                                HtmlGenerator::create('img')
                                    ->setAttribute('src', 'usjr.png')
                                    ->setAttribute('alt', 'Logo')
                            )
                    )
                    ->addChild(
                        HtmlGenerator::create('ul')
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
                                    ->addChild(
                                        HtmlGenerator::create('a')
                                            ->setAttribute('href', 'login.html')
                                            ->setContent('Log in')
                                    )
                            )
                            ->addChild(
                                HtmlGenerator::create('li')
                                    ->addChild(
                                        HtmlGenerator::create('a')
                                            ->setAttribute('href', 'signup.html')
                                            ->setContent('Sign up')
                                    )
                            )
                    )
            )
            ->addChild(
                HtmlGenerator::create('div')
                    ->setAttribute('class', 'container')
                    ->addChild(
                        HtmlGenerator::create('h1')
                            ->setContent('Welcome to University of San Jose- Recoletos')
                    )
                    ->addChild(
                        HtmlGenerator::create('p')
                            ->setContent('University life feels a little different here. At USJ-R, students have cultural, professional, and spiritual opportunities that transform individuals holistically.')
                    )
            )
    )
    ->render();

echo $html;

// Get the output buffer contents and clean the buffer
$htmlContent = ob_get_clean();

// Output the captured HTML content to the main script
return $htmlContent;
