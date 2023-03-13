<?php
    // http://localhost/CSE485_2023_BTTH03/product/1
    // http://localhost/CSE485_2023_BTTH03/product.php?id=1
    // PHP URL Rewrite
    define("DOC_ROOT",'/CSE485_2023_BTTH03');
    $path  = mb_strtolower($_SERVER['REQUEST_URI']);   
    $path  = substr($path, strlen(DOC_ROOT));                 // Remove up to DOC_ROOT
    
    $parts = explode('/', $path);       
    include($parts[1].".php");

?>