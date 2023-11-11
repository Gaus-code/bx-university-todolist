<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="styles.css">
	<title>todolist</title>
</head>
<body>
	<main class="main">
		<section class="content">
			<div class="content_header">
				<span class="icon">📝</span>
				<h1>ToDoList</h1>
			</div>
			<div class="content_main">
				<article class="content_todos">
					<article class="todo">
						<label for="#" class="labelTodo">
							<input type="checkbox" checked>
							<p class="labelText">my todo-1</p>
						</label>
					</article>
					<article class="todo">
						<label for="#" class="labelTodo">
							<input type="checkbox" checked>
							<p class="labelText">my todo-2</p>
						</label>
					</article>
				</article>
				<form action="/" method="post" class="addTodo">
					<span class="input_icon">✍🏻</span>
					<input class="addTodo_input" type="text" placeholder="create new todo">
					<buttton class="addTodo_btn" type="submit">Save</buttton>
				</form>
			</div>
			<div class="content_footer">
				<p>© 2023 ToDoList by bitrix University</p>
			</div>
		</section>
	</main>
</body>
</html>
