<?php
function autoload($class) {
  $explodedClass = explode('\\', $class);
  $classPath = array_shift($explodedClass). '\\';
  foreach ($explodedClass as $dir) {
    $classPath.= $dir. '\\';
  }
  if ($classPath[strlen($classPath) - 1] === '\\') {
    $classPath = substr($classPath, 0, -1);
  }

  $classPath = str_replace("Generator\\", "", $classPath). '.php';
  if (file_exists($classPath)) {
    require_once $classPath;
    return true;
  } else {
    return false;
  }
}

spl_autoload_register("autoload");

use Generator\CSSGenerator as CSSGenerator;
use Generator\CSSFormat as CSSFormat;
use Generator\CSSMedia;

$cssGen = new CSSGenerator("style");
$format1 = new CSSFormat(".coffee-shop");
$format1->set("display", "flex")
        ->set("flex-direction", "column")
        ->set("justify-content", "center")
        ->set("align-items", "center")
        ->set("background-color", "#fff") 
        ->set("width", "100vw")          
        ->set("height", "100vh")          
        ->set("margin", "0")
        ->set("padding", "0")
        ->set("font-family", "Arial, sans-serif") 
        ->finishTemplate();

$format2 = new CSSFormat(".coffee-shop h1");
$format2->set("font-size", "3em")
        ->set("margin-bottom", "0")
        ->set("text-align", "center")
        ->finishTemplate();

$format3 = new CSSFormat(".coffee-shop h2");
$format3->set("font-size", "2em")
        ->set("margin", "1em 0")
        ->set("text-align", "center")
        ->finishTemplate();

$format4 = new CSSFormat(".coffee-shop p");
$format4->set("font-size", "1em")
        ->set("text-align", "center")
        ->set("line-height", "1.5")  
        ->set("margin", "1em 0")
        ->finishTemplate();

$format5 = new CSSFormat(".coffee-shop a");
$format5->set("font-size", "1em")
        ->set("text-align", "center")
        ->set("text-decoration", "none")  
        ->set("color", "#000")           
        ->set("padding", "0.5em 1em")
        ->set("border", "1px solid #000")  
        ->finishTemplate();

$navbarStyle = new CSSFormat('.navbar');
$navbarStyle->set('display', 'flex')
            ->set('justify-content', 'space-between')
            ->set('padding', '1em 0')
            ->set('background-color', '#333')
            ->set('color', '#fff')
            ->set('box-shadow', '0 2px 4px rgba(0,0,0,0.1)')
            ->finishTemplate();

$navbarLinkStyle = new CSSFormat('.navbar a');
$navbarLinkStyle->set('color', '#fff')
                ->set('text-decoration', 'none')
                ->set('padding', '0.5em 1em')
                ->set('transition', 'color 0.3s ease')
                ->finishTemplate();

$dropdownButtonStyle = new CSSFormat('.dropdown.dropbtn');
$dropdownButtonStyle->set('background-color', '#555')
                    ->set('color', '#fff')
                    ->set('border', 'none')
                    ->set('cursor', 'pointer')
                    ->set('padding', '0.5em 1em')
                    ->finishTemplate();

$dropdownContentStyle = new CSSFormat('.dropdown-content a');
$dropdownContentStyle->set('color', '#fff')
                     ->set('text-decoration', 'none')
                     ->set('padding', '0.5em 1em')
                     ->set('display', 'block')
                     ->set('transition', 'background-color 0.3s ease')
                     ->finishTemplate();

$cssGen->addFormat($format1)
       ->addFormat($format2)
       ->addFormat($format3)
       ->addFormat($format4)
       ->addFormat($format5)
       ->addFormat($navbarStyle)
       ->addFormat($navbarLinkStyle)
       ->addFormat($dropdownButtonStyle)
       ->addFormat($dropdownContentStyle);

// Assuming you have a media query for smaller screens
// $mediaQuery = new CSSMedia(768, 'MAX_WIDTH', true);
// $mediaQuery->addFormat($navbarStyle)
//             ->addFormat($navbarLinkStyle)
//             ->addFormat($dropdownButtonStyle)
//             ->addFormat($dropdownContentStyle);
// $cssGen->addMedia($mediaQuery);

$cssGen->generateFile();
