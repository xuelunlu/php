<?php

function get_ip()
{

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ip = split(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

        return trim($ip[0]);

    }

    return $_SERVER['REMOTE_ADDR'];

}

echo get_ip();
