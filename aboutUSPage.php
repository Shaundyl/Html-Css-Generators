<?php

require_once 'HtmlGenerator.php';
use MyNamespace\HtmlGenerator;

$aboutUs = new HtmlGenerator();

// Start the body
$aboutUs->openBody();

// Header section
$aboutUs->openDiv('right-image')
    ->addImg('images/about-img.png','coffeImage', ['id' => 'coffeeImage'] )
    ->closeDiv()
    ->openDiv('title-text')
        ->addHeader(1,'ABOUT US', ['id' => 'textTitle'] )
        ->closeDiv()
    ->openDiv('description-text')
        ->addParagraph('Full cleaning and housekeeping services for companies and households.', 'firstParagraph' )
        ->closeDiv()
    ->openDiv('description-text')
        ->addParagraph('Located in the heart of the city, our shop offers a haven from the daily grind. With rustic charm and a welcoming vibe, its the perfect spot to enjoy your favorite brew or simply unwind with a good book.', 'secondParagraph' )
        ->closeDiv()
    ->openDiv('description-text')
        ->addParagraph('Come join us for a moment of tranquility and delicious coffee.', 'thirdParagraph' )
        ->closeDiv()
    ->openDiv('forButton')
        ->addButton('Read More', ['class' => 'readmoreButton', 'id' => 'readmoreButton'] )
    ->closeDiv();

// Close the body
$aboutUs->closeBody();

// Generate the final HTML string
$newAbout = $aboutUs->generate();

$file = fopen('about.html', 'w');
fwrite($file, $newAbout);
fclose($file);

// Render the HTML to the browser
$aboutUs->render();
