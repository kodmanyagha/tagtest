<?php

/**
 * @return string
 * In the development environment you must return current version without "-dev" suffix.
 */
function current_version()
{
	return "v1.1.0";
}

/***
 * @param $a
 * @param $b
 * @return mixed
 *
 * New function definition in v1.1.0
 */
function total($a, $b)
{
	return $a + $b;
}

echo "current version: " . current_version() . PHP_EOL;
echo "5 + 2 = " . total(5, 2) . PHP_EOL;

