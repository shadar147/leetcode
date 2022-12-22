<?php

require_once __DIR__ . '/vendor/autoload.php';

use Shadar\Leetcode\Printers\Printer;

$printer = new Printer();

$exercise = $printer->start();

echo PHP_EOL;

if (is_null($exercise)) {
    echo 'Incorrect exercise choice. Try again.';
}

$exercise->handle();
