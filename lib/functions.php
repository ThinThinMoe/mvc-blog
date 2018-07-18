<?php

//show arrary with pre
function showArray($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

function redirect($path = '')
{
    header("location:" . PATH . $path);
}

function getSession($key)
{
    return isset($_SESSION[$key]) ? $_SESSION[$key] : '';
}

function setSession($key, $value)
{
    return $_SESSION[$key] = $value;
}

function destroySession()
{
    session_destroy();
}

function flash($key = '', $value = '')
{
    if ($key && $value) {

       if (isset($_SESSION[$key])) {
       	unset($_SESSION[$key]);
       }
       $_SESSION[$key] = $value;

    } else{

    	if (isset($_SESSION[$key])) {
            echo "<div class='alert alert-success english rounded-0'>" . $_SESSION[$key] . "</div>";
            unset($_SESSION[$key]);
        }
    }

}
