<?php

    $rootPath = dirname(__FILE__). '/../';
    $rootPath = str_replace('\\', '/', $rootPath);
    $rootPath = preg_replace('|/[^/]+?/\.\./|', '/', $rootPath);

    define("ROOT_PATH",   $rootPath);
    define("TEMPLATE_DIR", ROOT_PATH . "/templates");
    define("TEMPLATE_COMPILED_DIR", ROOT_PATH . "/templates_c");

?>