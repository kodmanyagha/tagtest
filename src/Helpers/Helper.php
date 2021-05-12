<?php

/**
 * @return string
 * Current version number of library.
 */
function tagtest_version()
{
    $composer = json_decode(file_get_contents(dirname(__FILE__) . '/../../composer.json'));
    return $composer->version;
}

/***
 * @param $a
 * @param $b
 * @return mixed
 *
 * New function definition in v1.1.0
 */
function tagtest_total($a, $b)
{
    return $a + $b;
}

