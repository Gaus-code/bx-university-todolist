<?php

/**
 * @throws Exception
 */
function view(string $path, array $variables = []): string
{
	if(!preg_match('/^[0-9A-Za-z\/ -]+$/', $path))
	{
		throw new Exception('Invalid template path');
	}
	$absolutePath = ROOT . "/views/$path.php";

	if (!file_exists($absolutePath))
	{
		throw new Exception('template not found');
	}

	extract($variables);

	ob_start();

	require $absolutePath;

	return ob_get_clean();
}

function safe(string $value): string
{
	return htmlspecialchars($value, ENT_QUOTES);
}

function truncate(string $text, ?int $maxLength = null): string
{
	if ($maxLength === null)
	{
		return  $text;
	}

	$cropped = substr($text, 0, $maxLength);
	if ($cropped !== $text)
	{
		return "$cropped...";
	}
	return $text;
}
