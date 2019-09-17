<?php

use App\User;
use Test\ExampleTest;

$loader = require __DIR__ . '/vendor/autoload.php';
$loader->addPsr4('Test\\', 'test/');

User::log('ahmed');
ExampleTest::test();