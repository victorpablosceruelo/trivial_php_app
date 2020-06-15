<?php

require_once __DIR__ . '/vendor/autoload.php';

use trivial_php_bundle\HelloWorld\Index;

$greeting = new Index();

echo $greeting->greet("Hello Composer");

}

