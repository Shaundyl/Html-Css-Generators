<?php

// Include the HTML generation code from views/index.php
$htmlContent = require_once __DIR__ . '/views/index.php';

// Write the HTML content to a file named "output.html"
file_put_contents('output.html', $htmlContent);

// Optionally, you can also echo a message to indicate the file creation
echo "HTML file created successfully!";
