<?php
require_once __DIR__ . '/../boot.php';

$title = 'ToDoList';

echo view('layout',[
	'title' => 'todolist',
	'content' => view('pages/index',[
		'todos' => getTodos(),
	]),
]);


