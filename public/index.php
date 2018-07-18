<?php 

define('ROOT', dirname(__DIR__));// opt/lampp/htdoc
define('DS', DIRECTORY_SEPARATOR); // /
define('PROTOCOL','http'); // HTTP OR HTTPS
define('HOST',$_SERVER['HTTP_HOST']); // localhost
define('DIR',str_replace($_SERVER['DOCUMENT_ROOT'], '', ROOT.DS)); //test-mvc or folder name
define('PATH', PROTOCOL.'://'.HOST.DIR); // http://localhost/test-mvc/

session_start();

require_once ROOT.DS.'app'.DS.'autoload.php';

new App;


// showArray($_SERVER);


