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
                HtmlGenerator::create('title')
                    ->setContent('Login Page')
            )
    )
    ->addChild(
        HtmlGenerator::create('body')
            ->addChild(
                HtmlGenerator::create('ul')
                    ->addChild(
                        HtmlGenerator::create('li')
                            ->addChild(
                                HtmlGenerator::create('a')
                                    ->setAttribute('href', 'index.html')
                                    ->setAttribute('title', 'Homepage')
                                    ->setContent('Homepage')
                            )
                    )
            )
            ->addChild(
                HtmlGenerator::create('center')
                    ->addChild(
                        HtmlGenerator::create('form')
                            ->setAttribute('action', 'processlogin.php')
                            ->setAttribute('method', 'post')
                            ->addChild(
                                HtmlGenerator::create('h3')
                                    ->setContent('LOGIN')
                            )
                            ->addChild(
                                HtmlGenerator::create('table')
                                    ->addChild(
                                        HtmlGenerator::create('tr')
                                            ->addChild(
                                                HtmlGenerator::create('td')
                                                    ->addChild(
                                                        HtmlGenerator::create('input')
                                                            ->setAttribute('type', 'text')
                                                            ->setAttribute('name', 'username')
                                                            ->setAttribute('id', 'username')
                                                            ->setAttribute('placeholder', 'Username')
                                                            ->setAttribute('required', 'required')
                                                    )
                                            )
                                    )
                                    ->addChild(
                                        HtmlGenerator::create('tr')
                                            ->addChild(
                                                HtmlGenerator::create('td')
                                                    ->addChild(
                                                        HtmlGenerator::create('input')
                                                            ->setAttribute('type', 'password')
                                                            ->setAttribute('name', 'password')
                                                            ->setAttribute('id', 'password')
                                                            ->setAttribute('placeholder', 'Password')
                                                            ->setAttribute('required', 'required')
                                                    )
                                            )
                                    )
                            )
                            ->addChild(
                                HtmlGenerator::create('button')
                                    ->setAttribute('type', 'submit')
                                    ->addChild(
                                        HtmlGenerator::create('a')
                                            ->setAttribute('href', 'display-students.php')
                                            ->setContent('Submit')
                                    )
                            )
                            ->addChild(
                                HtmlGenerator::create('p')
                                    ->setContent("Don't have an account? ")
                                    ->addChild(
                                        HtmlGenerator::create('a')
                                            ->setAttribute('href', 'signup.html')
                                            ->setAttribute('class', 'signup-link')
                                            ->setContent('Sign up here!')
                                    )
                            )
                    )
            )
    )
    ->render();

echo $html;

// Get the output buffer contents and clean the buffer
$htmlContent = ob_get_clean();

// Output the captured HTML content to the main script
return $htmlContent;
