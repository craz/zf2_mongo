<?php
/**
 * Setup autoloading
 */

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    include_once __DIR__ . '/../vendor/autoload.php';
} else {
    // if composer autoloader is missing, explicitly add the ZF library path
    
    require_once __DIR__ . '/../vendor/ZF2/library/Zend/Loader/StandardAutoloader.php';
    $loader = new Zend\Loader\StandardAutoloader(
        array(
             Zend\Loader\StandardAutoloader::LOAD_NS => array(
                 'Zend'     => __DIR__ . '/../vendor/ZF2/library/Zend',
                 'ZendTest' => __DIR__ . '/ZendTest',
             ),
        ));
    $loader->register();
}
