<?php 

spl_autoload_register(function($className){
	require_once ROOT.DS.'lib'.DS.strtolower($className).'.class.php';
});

require_once ROOT.DS.'lib'.DS.'functions.php';
require_once ROOT.DS.'app'.DS.'config'.DS.'config.php';

