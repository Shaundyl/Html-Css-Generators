<?php

require_once __DIR__ . '/../../html/src/HtmlGenerator/HtmlGenerator.php';

use HtmlGenerator\HtmlGenerator;

// Start output buffering
ob_start();

// Print the DOCTYPE declaration
echo "<!DOCTYPE html>\n";

// Create HTML structure
$html = HtmlGenerator::create('html')
    ->addChild(
        HtmlGenerator::create('head')
            ->addChild(
                HtmlGenerator::create('title')
                    ->setContent('Sign Up Page')
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
                HtmlGenerator::create('form')
                    ->setAttribute('action', 'processreg.php')
                    ->setAttribute('method', 'post')
                    ->addChild(
                        HtmlGenerator::create('h2')
                            ->setContent('SIGN UP HERE!')
                    )
                    ->addChild(
                        HtmlGenerator::create('table')
                            ->addChild(
                                HtmlGenerator::create('tr')
                                    ->addChild(
                                        HtmlGenerator::create('td')
                                            ->addChild(
                                                HtmlGenerator::create('label')
                                                    ->setAttribute('for', 'userid')
                                                    ->setAttribute('style', 'padding-right: 20px;')
                                                    ->setContent('User ID:')
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('input')
                                                    ->setAttribute('type', 'text')
                                                    ->setAttribute('id', 'userid')
                                                    ->setAttribute('name', 'userid')
                                                    ->setAttribute('placeholder', 'Enter your user ID')
                                                    ->setAttribute('required', 'required')
                                            )
                                    )
                            )
                            ->addChild(
                                HtmlGenerator::create('tr')
                                    ->addChild(
                                        HtmlGenerator::create('td')
                                            ->addChild(
                                                HtmlGenerator::create('label')
                                                    ->setAttribute('for', 'username')
                                                    ->setAttribute('style', 'padding-right: 2px;')
                                                    ->setContent('Username:')
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('input')
                                                    ->setAttribute('type', 'text')
                                                    ->setAttribute('id', 'username')
                                                    ->setAttribute('name', 'username')
                                                    ->setAttribute('placeholder', 'Enter your username')
                                                    ->setAttribute('required', 'required')
                                            )
                                    )
                            )
                            ->addChild(
                                HtmlGenerator::create('tr')
                                    ->addChild(
                                        HtmlGenerator::create('td')
                                            ->addChild(
                                                HtmlGenerator::create('label')
                                                    ->setAttribute('for', 'pwd')
                                                    ->setAttribute('style', 'padding-right: 5px;')
                                                    ->setContent('Password:')
                                            )
                                            ->addChild(
                                                HtmlGenerator::create('input')
                                                    ->setAttribute('type', 'password')
                                                    ->setAttribute('id', 'pwd')
                                                    ->setAttribute('name', 'pwd')
                                                    ->setAttribute('placeholder', 'Enter your password')
                                                    ->setAttribute('required', 'required')
                                            )
                                    )
                            )
                    )
                    ->addChild(
                        HtmlGenerator::create('button')
                            ->setAttribute('type', 'submit')
                            ->setContent('Submit')
                    )
                    ->addChild(
                        HtmlGenerator::create('p')
                            ->setContent("Already have an account? ")
                            ->addChild(
                                HtmlGenerator::create('a')
                                    ->setAttribute('href', 'login.html')
                                    ->setContent('Log in here')
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
