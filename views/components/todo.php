<?php
/**
 * @var array $todo
 * @var bool $isHistory
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
			<p class="labelText"><?= safe($todo['title']) ?></p>
		</label>
	</article>
</article>
