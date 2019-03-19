<?php

function name_is_valid($name) {
    return preg_match("/^[а-яА-Я]*|[a-zA-Z]*$/", $name) && strlen($name) <= 128;
}

function phone_is_valid($phone) {
    return preg_match("/^[0-9]*$/", $name) && strlen($phone) <= 15;
}

function email_is_valid($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email) <= 128;
}

function date_is_valid($date) {
    $format = 'Y-m-d';
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}