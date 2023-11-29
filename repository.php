<?php

function getTodos(?int $time = null): array
{
	$dbHost = '127.0.0.1';
	$dbUser = 'root';
	$dbPassword = '';
	$dbName = 'todolist';

	$connection = mysqli_init();
	$connected = mysqli_real_connect($connection, $dbHost, $dbUser, $dbPassword, $dbName);

	if (!$connected)
	{
		$error = mysqli_connect_errno() . ': ' . mysqli_connect_error();
		throw new Exception($error);
	}

	$encodingResult = mysqli_set_charset($connection, 'utf8');

	if (!$encodingResult)
	{
		throw new Exception(mysqli_error($connection));
	}

	$from = date('Y-m-d 00:00:00', $time);
	$to = date('Y-m-d 23:59:59', $time);

	$result = mysqli_query($connection, "
		SELECT * FROM todos
		WHERE created_at BETWEEN '{$from}' AND '{$to}'
		ORDER BY created_at
		LIMIT 100
	");
	if (!$result)
	{
		throw new Exception(mysqli_error($connection));
	}
	$todos = [];
	while ($row = mysqli_fetch_assoc($result))
	{
		$todos[] = [
			'id' => $row['id'],
			'title' => $row['title'],
			'completed' => ($row['completed'] === 'Y'),
			'created_at' => strtotime($row['created_at']),
			'updated_at' => $row['updated_at'] ? strtotime($row['updated_at']) : null,
			'completed_at' => $row['completed_at'] ? strtotime($row['completed_at']) : null,
		];
	}
	return $todos;
}

function getRepositoryPath(?int $time): string
{
	$time = $time ?? time();

	$fileName = date('Y-m-d') . '.txt';
	return  ROOT . "/data/" . $fileName;

}

function addToDo(array $todo, ?int $time = null)
{
	$todos = getTodos($time);
	$todos[] = $todo;

	storeTodos($todos);
}

function storeTodos(array $todos, ?int $time = null)
{
	$filePath = getRepositoryPath($time);
	file_put_contents($filePath, serialize($todos));
}

function getTodosOrFail (?int $time = null): array
{
	$todos = getTodos();
	if (empty($todos))
	{
		echo 'Nothing to do here';
		exit();
	}
	return $todos;
}