<?php
/**
 * @var string $title
 * @var array $report
 * @var string $content
 */
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="styles.css">
	<title><?= $title ?></title>
</head>
<body>
<main class="main">
	<section class="content">
		<div class="content_header">
			<span class="icon">📝</span>
			<h1><?= $title ?></h1>
		</div>
		<?= $content ?>
		<div class="content_footer">
			<p>© <?= date('Y')?> ToDoList by bitrix University</p>
		</div>
	</section>
</main>
</body>
</html>


