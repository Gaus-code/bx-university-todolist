<?php
require_once __DIR__ . '/../boot.php';


$time = null;
$isHistory = false;
$title = 'ToDoList';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$title = trim($_POST['title']);
	if (strlen($title) > 0)
	{
		$todo = createToDo($title);
		addToDo($todo);
		redirect('/?saved=true');
	}
	else
	{
		$errors[] = 'Task cannot be empty 🙃';
	}
}


if(isset($_GET['date']))
{
	$time = strtotime($_GET['date']);

	if ($time === false)
	{
		$time = time();
	}

	$today = date('Y-m-d');
	if ($today !== date('Y-m-d', $time))
	{
		$isHistory = true;
		$title = sprintf('ToDoList : %s', date('j M', $time));
	}
}

echo view('layout',[
	'title' => $title,
	'bottomMenu' => $bottomMenu = require ROOT . '/menu.php',
	'content' => view('pages/index',[
		'todos' => getTodos($time),
		'isHistory' => $isHistory,
		'errors' => $errors,
	]),
]);


