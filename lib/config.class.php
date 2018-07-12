<?php 

class Config
{
	private static $settings = [];

	public static function get($key)
	{
		return isset(self::$settings[$key]) ? self::$settings[$key] : '';
	}

	public static function set($key, $value)
	{
		self::$settings[$key] = $value;
	}
}