<?php
/**
 * @var string $title
 * @var array $report
 * @var string $content
 * @var array $bottomMenu
 */
?>

<!doctype html>
<html lang="<?= option('APP_LANG', 'en'); ?>">
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
			<a href="/" class="icon">📝</a>
			<h1><?= $title ?></h1>
		</div>
		<?= $content ?>
		<div class="content_footer">
			<div>
				<p>© <?= date('Y')?> <?= $title ?> by bitrix University</p>
			</div>
			<?= view('components/menu', ['items' => $bottomMenu]); ?>
		</div>
	</section>
</main>
</body>
</html>


