<?php namespace core;
/**
* 
*/
class Bootstrap 
{
	public static function run() 
	{
		self::parseUrl();
	}

	public static function parseUrl() {
		dp($_SERVER);
	}
}
