<?php

/*
 * Composer Autoloading
 */

if ( file_exists( 'vendor/autoload.php' ) ) {
    $loader = include 'vendor/autoload.php';
}

if ( !class_exists( 'Zend\Loader\AutoloaderFactory' ) ) {
    throw new RuntimeException( 'Unable to load ZF2. Run `composer install`.' );
}