<?php


// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));


    if (!defined('WEB_ROOT_PATH')){ 
        define("WEB_ROOT_PATH","/Users/matija/Desktop/Git/HelloWorldGLMatija/GL-Hello-World/public_html/"); 
    }
    
    if (!defined('APP_URL')){ 
        define("APP_URL","http://local.demogl/public_html/"); 
    } 
    
?>
