<?php

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

date_default_timezone_set('Asia/Taipei');

echo age('2013-05-11 10:02:00');
