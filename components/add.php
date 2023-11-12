<?php
function addCommand(array $arguments)
{
	$title = array_shift($arguments);
	$todo = createToDo($title);

	addToDo($todo);
}


//serialize - преобразовывает любые данные в строку
//unserialize - преобразовывает обратно
//var_dump(serialize($todo));
