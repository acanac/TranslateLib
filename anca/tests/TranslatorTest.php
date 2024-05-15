<?php

require  __DIR__ . '\vendor/autoload.php';

use Translate\Translator;

$translator = new Translator();
echo $translator->translate('Hello', 'en', 'fr');