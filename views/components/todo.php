<?php
/**
 * @throws Exception
 * @var bool $isHistory
 * @var array $todo
 */

?>

<article class="content_todos">
	<article class="todo">
		<label for="#" class="labelTodo">
			<input
				type="checkbox"
				<?= ($todo['completed']) ? 'checked' : ''; ?>
				<?= ($isHistory) ? 'disabled' : ''; ?>
			>
			<p class="labelText"><?= safe( truncate($todo['title'], option('TRUNCATE_TODO', 200))) ?></p>
		</label>
	</article>
</article>

