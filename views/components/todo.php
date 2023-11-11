<?php
/**
 * @var array $todo
 */
?>

<article class="content_todos">
	<article class="todo">
		<label for="#" class="labelTodo">
			<input type="checkbox"<?= ($todo['completed']) ? 'checked' : ''; ?>>
			<p class="labelText"><?= $todo['title'] ?></p>
		</label>
	</article>
</article>
