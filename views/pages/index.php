<?php

/**
 * @var array $todos
 * @var bool $isHistory
 * @var array $errors
 */

?>

<div class="content_main">

	<?php if (!empty($errors)): ?>

	<div class="alert danger">
		<?= implode('<br>', $errors);?>
	</div>
	<?php endif; ?>

	<?php foreach ($todos as $todo): ?>
		<?= view('components/todo', ['todo' => $todo, 'isHistory' => $isHistory]); ?>
	<?php endforeach; ?>

	<?php if(!$isHistory):?>
	<form action="/" method="post" class="addTodo">
		<span class="input_icon">✍🏻</span>
		<input class="addTodo_input" type="text" name="title" required placeholder="create new todo">
		<buttton class="addTodo_btn" type="submit">Save</buttton>
	</form>
	<?php endif; ?>
</div>
