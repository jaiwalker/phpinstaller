#!/usr/bin/env php
<?php

if (file_exists(__DIR__.'/../../autoload.php')) {
    require __DIR__.'/../../autoload.php';
} else {
    require __DIR__.'/vendor/autoload.php';
}

$app = new Symfony\Component\Console\Application('Jai', '1.0');
$app->add(new Jai\Installer\Console\NewInstaller);

$app->run();