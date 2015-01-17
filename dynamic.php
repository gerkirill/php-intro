<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf8">
</head>
<body>
	<h1>Динамическая страница</h1>

	<p>
		Текущее время - <?php echo date('H:i:s')?> <a href="">обновить</a>
	</p>
	<p>
		Время в предыдущем абзаце - это динамические данные, выведенные с помощью PHP. Когда ты обновляешь страницу - время меняется. PHP создан для того, чтобы выводить динамические, меняющиеся данные в HTML. Но можно выводить и что-то повеселее, чем текущая дата.
	</p>

	<h2>Вопросы</h2>
	<ul>
		<li>Как создать ссылку, которая перезагружает текущую страницу?</li>
		<li>Как думаешь, какое время выводит функция <code>date()</code> - то, которое установлено на машине пользователя, или то, которое сейчас на сервере, где выполняется PHP скрипт?</li>
		<li>Какими HTML-тегами создается список, такой как этот список вопросов? </li>
		<li>Можешь поменять PHP-скрипт, чтобы вместе с текущим временем выводилась и текущая дата? Например &laquo;2015-01-01 12:35:50&raquo;. </li>
	</ul>

	<p>
		Идем <a href="bash.php">дальше</a>.
	</p>
</body>
</html>