<?php

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use Webmozart\Assert\Assert;
use PhpTests\StringUtils;

Assert::eq(StringUtils\capitalize('hello'), 'Hello');
Assert::eq(StringUtils\capitalize(''), '');

echo 'All tests passed succesfully!';
