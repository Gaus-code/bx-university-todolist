<?php

$bottomMenu = [];

$time = isset($_GET['date']) ? strtotime($_GET['date']) : time();

if ($time === false)
{
	$time = time();
}

$secondsIndDay = (60 * 60 * 24);
$dayBefore = $time - $secondsIndDay;
$dayAfter = $time + $secondsIndDay;

return [
		['url' => '/?date=' . date('Y-m-d', $dayBefore), 'text' => '- 1 day'],
		['url' => '/', 'text' => 'Today'],
		['url' => '/?date=' . date('Y-m-d', $dayAfter), 'text' => '+ 1 day'],
		['url' => '/report.php', 'text' => 'Reporting'],
];