<?php

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

Helper::scandir('C:\wamp\www\php', null);
