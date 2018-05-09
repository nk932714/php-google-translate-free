<?php
require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$source = '#';
$target = 'hi';
$text = 'verdadero';

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);

echo $result;
?>
