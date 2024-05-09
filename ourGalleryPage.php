<?php

require_once 'HtmlGenerator.php';
use MyNamespace\HtmlGenerator;

$ourGallery = new HtmlGenerator();

// Start the body
$ourGallery->openBody();

// Header section
$ourGallery->openDiv('title-text')
        ->addHeader(1,'Our Gallery', ['id' => 'textTitle'] )
        ->closeDiv()
    ->openDiv('description-text')
        ->addParagraph('Welcome to our Gallery, where each image tells a story of moments shared and memories made.', 'firstParagraph' )
        ->closeDiv()
    ->openDiv('description-text')
        ->addParagraph('Step into a visual journey through our coffee shop, where every snapshot captures the essence of our cozy ambiance, expertly crafted beverages, and the smiling faces of our cherished patrons.', 'secondParagraph' )
        ->closeDiv()
    ->openDiv('row1-Img')
        ->addImg('images/img-1.png','coffeImage', ['class' => 'imageRow1', 'id' => 'coffeeImage'] )
        ->addImg('images/img-2.png','coffeImage', ['class' => 'imageRow1', 'id' => 'coffeeImage'] )
        ->addImg('images/img-3.png','coffeImage', ['class' => 'imageRow1', 'id' => 'coffeeImage'] )
    ->closeDiv()
    ->openDiv('row2-Img')
        ->addImg('images/img-4.png','coffeImage', ['class' => 'imageRow2', 'id' => 'coffeeImage'] )
        ->addImg('images/img-5.png','coffeImage', ['class' => 'imageRow2', 'id' => 'coffeeImage'] )
        ->addImg('images/img-6.png','coffeImage', ['class' => 'imageRow2', 'id' => 'coffeeImage'] )
    ->closeDiv()
    ->openDiv('row3-Img')
        ->addImg('images/img-7.png','coffeImage', ['class' => 'imageRow3', 'id' => 'coffeeImage'] )
        ->addImg('images/img-8.png','coffeImage', ['class' => 'imageRow3', 'id' => 'coffeeImage'] )
        ->addImg('images/img-9.png','coffeImage', ['class' => 'imageRow3', 'id' => 'coffeeImage'] )
    ->closeDiv()
    ->openDiv('forButton')
        ->addButton('See More', ['class' => 'seemoreButton', 'id' => 'seemoreButton'] )
    ->closeDiv();

// Close the body
$ourGallery->closeBody();

// Generate the final HTML string
$gallery = $ourGallery->generate();

$file = fopen('gallery.html', 'w');
fwrite($file, $gallery);
fclose($file);

// Render the HTML to the browser
$ourGallery->render();
