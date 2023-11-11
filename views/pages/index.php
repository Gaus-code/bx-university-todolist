<?php

/**
 * @var array $todos
 */

?>

<div class="content_main">
	<?php foreach ($todos as $todo): ?>
		<?= view('components/todo', ['todo' => $todo]); ?>
	<?php endforeach; ?>

	<form action="/" method="post" class="addTodo">
		<span class="input_icon">✍🏻</span>
		<input class="addTodo_input" type="text" placeholder="create new todo">
		<buttton class="addTodo_btn" type="submit">Save</buttton>
	</form>
</div>
