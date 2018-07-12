<?php

session_start();

//show arrary with pre
function showArray($arr) {
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
}

function redirect($path = ''){
	header("location:" .PATH.$path);
}

function getSession($key) {
	return isset($_SESSION[$key]) ? $_SESSION[$key] : '';
}

function setSession($key, $value) {
	return $_SESSION[$key] = $value;
}

function destroySession()
{
	session_destroy();
}

