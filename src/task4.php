<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Заголовок</title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<?php 
 $result1 = [
	'author' => array("фио", "email"),
	'book' => array("название", "author_email")
 ];
 
 var_dump($result1);
?>

<h1>Заголовок</h1>
<div>Авторов на портале <Количество авторов></div>
<!-- Выведите все книги -->
<p>Книга <Название книги>, ее написал <Фио автора> <Год рождения автора> (<email автора>)</p>

</body>
</html>
