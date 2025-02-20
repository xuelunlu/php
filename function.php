<?php

date_default_timezone_set('Asia/Taipei');

set_error_handler('error_handler');

function error_handler($errno, $errstr, $errfile, $errline, $errcontext)
{

}

class Helper
{

    public function __construct()
    {

    }

    /*
    echo scandir('C:\wamp\www', '');
     */
    public static function scandir($dir, $target)
    {

        if ($items = @scandir($dir)) {

            echo "<ul>";

            foreach ($items as $item) {

                if ($item == '..' or $item == '.') {

                    continue;

                }

                if (is_dir($dir . '/' . $item)) {

                    echo '<li class="folder">' . $item;

                    self::scandir($dir . '/' . $item, $target);

                    echo '</li>';

                } else {

                    echo '<li>' . $item . '</li>';

                }

            }

            echo '</ul>';

        }

    }

}

//Helper::scandir('C:\wamp\www\php', null);

function age($birthday)
{

    $timestamp = strtotime($birthday);

    $age = date('Y') - date('Y', $timestamp);

    if ($age >= 0) {

        if (intval(date('mdHis', $timestamp)) > intval(date('mdHis'))) {

            $age = $age - 1;

            if ($age < 0) {

                return 0;

            }

        }

        return $age;

    } else {

        return 0;

    }

}

function get_ip()
{

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ip = split(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

        return trim($ip[0]);

    }

    return $_SERVER['REMOTE_ADDR'];

}

//echo age('2013-05-11 10:02:00');

echo get_ip();
