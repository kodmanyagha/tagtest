<?php

/**
 * @return string
 * Current version number of library.
 *
 * NOTE: In the development environment you must return current version without "-dev" suffix.
 */
function tagtest_version()
{
	return "v1.1.2";
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

