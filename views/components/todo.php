<?php
/**
 * @throws Exception
 * @var bool $isHistory
 * @var Todo $todo
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
			<?= safe( truncate($todo->getTitle(), option('TRUNCATE_TODO', 200))) ?>
			<time
				datetime="<?= $todo->getCreatedAt()->format(DateTime::ATOM)?>">
				<?= $todo->getCreatedAt()->format('M, d') ?>
			</time>
		</label>
	</article>
</article>

