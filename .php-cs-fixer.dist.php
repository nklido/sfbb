<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->exclude(['vendor', 'storage', 'bootstrap/cache']);

return (new Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        'ordered_imports' => true,
        'no_unused_imports' => true,
        'class_attributes_separation' => true,
        'phpdoc_align' => ['align' => 'vertical'],
        'phpdoc_order' => true,
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
        'global_namespace_import' => ['import_classes' => true],
    ])
    ->setFinder($finder);
