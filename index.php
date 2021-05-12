<?php

/**
 * @return string
 * In the development environment you must return current version without "-dev" suffix.
 */
function current_version()
{
	return "v1.0.0";
}

echo "current version: " . current_version() . PHP_EOL;
