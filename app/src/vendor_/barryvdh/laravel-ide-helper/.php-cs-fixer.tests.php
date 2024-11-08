<?php
    require __DIR__ . '/vendor_/autoload.php';

    $finder = PhpCsFixer\Finder::create()
        ->in(__DIR__ . '/tests')
        ->exclude('__snapshots__');

    $config = require __DIR__ . '/.php-cs-fixer.common.php';

// Additional rules for tests
    $config = array_merge(
        $config,
        [
            'declare_strict_types' => true,
        ]
    );

    return (new PhpCsFixer\Config())
        ->setFinder($finder)
        ->setRules($config)
        ->setRiskyAllowed(true)
        ->setCacheFile(__DIR__ . '/.php-cs-fixer.tests.cache');
