<?php
function option(string $name, $defaultValue)
{
	/**@var  array $config*/
	static $config = null;
	if ($config === null)
	{
		$config = require ROOT . '/config.php';
	}

	if (array_key_exists($name, $config))
	{
		return $config[$name];
	}
	if ($defaultValue !== null)
	{
		return $defaultValue;
	}
	throw new Exception("Configuration {$name} not found");
}