<?php
/* this file was generated by the matomo-scoper tool */

$originalLoader = require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload_original.php';

if (is_file(__DIR__ . '/prefixed/vendor/autoload.php')) {
    require_once __DIR__ . '/prefixed/vendor/autoload.php';
}

return $originalLoader;