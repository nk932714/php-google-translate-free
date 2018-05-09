<?php
require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;
$source = '#'; // This means Auto detect langauge alternatively we can use " auto "
$target = 'hi';
$text = $_GET["word"];
//$text = 'verdadero';

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);
echo $result;
?>
