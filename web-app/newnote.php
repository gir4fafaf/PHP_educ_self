<html>
<body>
<p>Добавить новую заметку: </p>
<form id="newnote" name="newnote" method="post">
<input type="text" name="title" id="title" size="20" maxlength="20" placeholder="Тема"/><br>
<textarea name="article" cols="55" rows="10" id=" article" placeholder="Текст"></textarea><br>
<input type="hidden" name = "created" id = "created" value ="<?php echo date("Y-m-d");?>"/>
<input type="submit" name="submit" id="submit" value="Отправить" />
</form>
<a href="blog.php">Возврат на главную страницу сайта</a>
</body>
</html>
<?php
require_once ("MySiteDB.php");
$select_db = mysqli_select_db ($link, $db);
$title = $_POST['title'];
$created = $_POST['created'];
$article = $_POST['article'];
if (($title)&&($created)&&($article))
{
$query = "INSERT INTO notes (title, created, article) VALUES ('$title','$created', '$article')";
$result = mysqli_query ($link, $query);
}
?>