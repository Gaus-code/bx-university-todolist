<?php

require_once __DIR__ . '/../boot.php';

//$todos = getTodos();
$allTodos = prepareReportData();

$totalDays = count($allTodos);
$totalTasksCount = array_reduce($allTodos, function($prev, $todos){
	return $prev + count($todos);
}, 0);

$totalCompletedTasksCount = array_reduce($allTodos, function($prev, $todos){
	$completed = array_filter($todos, fn($todo) => $todo['completed']);
	return $prev + count($completed);
}, 0);

$dailyTasksCount = array_map(function ($todos){
	return count($todos);
}, $allTodos);

$maxTasks = max($dailyTasksCount);
$minTasks = min($dailyTasksCount);

$averageTasksCount = 0;
$averageCompletedTasksCount = 0;
if ($totalDays > 0)
{
	$averageTasksCount = floor($totalTasksCount / $totalDays);
	$averageCompletedTasksCount = floor($totalCompletedTasksCount / $totalDays);
}

$report = [
	"Total days: $totalDays",
	"Total tasks: $totalTasksCount",
	"Total completed tasks: $totalCompletedTasksCount",
	"Min tasks in a day: $minTasks",
	"Max tasks in a day: $maxTasks",
	"Average tasks per day: $averageTasksCount",
	"Average completed tasks per day: $averageCompletedTasksCount",
];


echo view('layout',[
	'title' => 'ToDoList : Report',
	'content' => view('pages/report',[
		'report' => $report,
	]),
]);
