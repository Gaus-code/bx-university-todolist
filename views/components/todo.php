<?php
/**
 * @throws Exception
 * @var bool $isHistory
 * @var Todo[] $todo
 */

?>

<article class="content_todos">
	<article class="todo">
		<label for="#" class="labelTodo">
			<input
				type="checkbox"
				<?= ($todo->isCompleted() ? 'checked' : ''); ?>
				<?= ($isHistory) ? 'disabled' : ''; ?>
			>
			<p class="labelText"><?= safe( truncate($todo['title'], option('TRUNCATE_TODO', 200))) ?></p>
			<time datetime="2021-10-12">October, 12</time>
		</label>
	</article>
</article>

