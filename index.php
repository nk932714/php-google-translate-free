<?php
require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;
$source = '#'; // This means Auto detect langauge alternatively we can use " auto "
$target = 'hi';
$target2 = 'en';
$text = $_GET["word"];
//$text = 'verdadero';

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);
$result2 = $trans->translate($source, $target2, $text);

echo $result."<br>";
echo $result2;

?>
