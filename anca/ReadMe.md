# Mon Package de Traduction

Un package PHP pour la traduction de texte.

## Installation

Vous pouvez installer ce package via Composer :

```php
composer require acanac/translator
```

## Utilisation

```php
<?php

require 'vendor/autoload.php';

use Translate\Translator;

$translator = new Translator();
$translatedText = $translator->translate("Hello", "en", "fr");
echo $translatedText;
```