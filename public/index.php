<?php 

define('ROOT', dirname(dirname(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);

require_once ROOT.DS.'app'.DS.'init.php';

new App;