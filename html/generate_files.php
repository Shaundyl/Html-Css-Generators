<?php

// Function to generate HTML content for a specific page
function generateHtml($pageName) {
    // Determine the path to the HTML generator file for the specified page
    $generatorFilePath = __DIR__ . '/views/' . $pageName . '.php';

    // Check if the generator file exists
    if (file_exists($generatorFilePath)) {
        // Include the HTML generation code and capture the content
        $htmlContent = require $generatorFilePath;

        // Format the HTML content
        $formattedHtmlContent = prettyPrintHtml($htmlContent);

        // Write the formatted HTML content to a file named "{$pageName}.html"
        file_put_contents("$pageName.html", $formattedHtmlContent);

        // Optionally, you can also echo a message to indicate the file creation
        echo "HTML file for $pageName created successfully!\n";
    } else {
        // Display an error message if the generator file does not exist
        echo "Error: HTML generator file for $pageName not found.\n";
    }
}

// Function to format HTML content
function prettyPrintHtml($html) {
    $dom = new DOMDocument;
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    @$dom->loadHTML($html);
    return $dom->saveHTML();
}

// Generate HTML files for different pages
generateHtml('index');
generateHtml('login');
generateHtml('signup');

