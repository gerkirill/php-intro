<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf8">
</head>
<body>
	<h1>Время веселья</h1>

	<p>
		Хочется вывести что-то повеселее даты? Покажи случайную шутку с <a href="http://bash.im/random" target="_blank">bash.im</a>. Тебе понадобится:
	</p>	
	<ul>
		<li><b>file_get_contents</b> - чтобы получить HTML страницы http://bash.im/random со случайными шутками</li>
		<li><b>strpos</b> и <b>substr</b> - чтобы взять кусок HTML с первой шуткой - начиная с <code>&lt;div class="text"&gt;</code>
		и заканчивая ближайшим <code>&lt;/div&gt;</code></li>
		<li><b>mb_convert_encoding</b> - чтобы переконвертировать текст взятый с bash.im из кодировки windows-1251 в кодировку этой страницы - utf8</li>
	</ul>
	<p>
		Попробуй выполнить задание самостоятельно, вот тебе алгоритм:
	</p>
	<ol>
		<li>Получи содержимое http://bash.im/random с помощью file_get_contents</li>
		<li>Найди позицию подстроки <code>&lt;div class="text"&gt;</code> в этом HTML с помощью strpos. Прямо за этой подстрокой - начинается первая шутка. </li>
		<li>Определи на какой позиции шутка заканчивается - т.е. найди позицию первого тега <code>&lt;/div&gt;</code> 
			<b>после</b> позиции, которую ты определил раньше - используй <code>strpos</code> с третьим параметром - <code>$offset</code>
		</li>
		<li>Используй substr() тобы получить из HTML нужный кусок, содержащий первую шутку, используя позиции, полученные ранее.</li>
		<li>Используй mb_convert_encoding чтобы конвертировать полученный кусок из кодировки windows-1251 в uft8 и echo, чтобы вывести результат.</li>
	</ol>
	<p>Если что-то не получится - посмотри пример ниже, там я вывожу заголовок со страницы случайных шуток - 
		часть HTML начиная с <code>&lt;h1&gt;</code> и до <code>&lt;/h1&gt;</code> - ты можешь взять этот пример за основу. Разберись что делает каждая
		строчка.
	</p>
	<h2>Вопросы</h2>
	<ul>
		<li>Какими тегами создается нумерованный список в HTML?</li>
		<li>Как быть, если ты хочешь вывести на странице пример HTML кода, например &lt;h3&gt;Заголовок&lt;/h3&gt;, но не хочешь чтобы браузер
		преобрезовал это в обычный заголовок? Какие символы в теге нужно заменить и на что?</li>
		<li>Какой новый тег использован на этой странице (для горизонтальной линии)? Обрати внимание - это самозакрывающийся тег. Внутри этого
		тега ничего нет, и он является одновременно открывающим и закрывающим.</li>
	</ul>

	<hr />

	<p>А вот результат работы моего примера: </p>
	<?php
		$html = file_get_contents('http://bash.im/random');
		$openTag = '<h1>';
		$closeTag = '</h1>';
		$startPos = strpos($html, $openTag) + strlen($openTag);
		$endPos = strpos($html, $closeTag, $startPos);
		$result = substr($html, $startPos, $endPos - $startPos);

		echo mb_convert_encoding($result, 'utf8', 'windows-1251');
	?>
</body>
</html>