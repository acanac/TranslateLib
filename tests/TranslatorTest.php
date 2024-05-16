<?php

require __DIR__ . '/../vendor/autoload.php';

use Translate\Translator;

$translator = new Translator();
$translatedText = $translator->translate("Hello", "en", "fr");
echo $translatedText;
