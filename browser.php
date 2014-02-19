<?php

function browser_style_for($file, $browser) {
    $path = dirname(__FILE__) . '/' . $browser .'/'. $file;
    if(!file_exists($path)) {
        return FALSE;
    } else {
        require_once($path);
        return TRUE;
    }
}

function browser_style($file) {
    $file = basename($file);
    $ua = $_SERVER['HTTP_USER_AGENT'];

    if(strpos($ua, 'ELinks') === 0) {
        return browser_style_for($file, 'elinks');
    }

    return FALSE;
}

?>
