<?php
$note_id = $_GET['note'];
?>
<html>
<body>
<p>Добавить новый комментарий: </p>
<form id="newcomment" name="newcomment" method="post">
<input type="text" name="author" id="author" size="20" maxlength="20" placeholder="Автор"/><br>
<textarea name="comment" cols="55" rows="10" id="comment" placeholder="Комментарий"></textarea><br>
<input type="hidden" name = "created" id = "created" value ="<?php echo date("Y-m-d");?>"/>
<input type="submit" name="submit" id="submit" value="Отправить" />
</form>
<a href='comments.php?note=<?php echo $note_id  ?>'>Назад</a>
</body>
</html>
<?php
$localhost = "localhost";
$db = "MySiteDBselkov";
$user = "root";
$password = "";
$link = mysqli_connect($localhost, $user, $password, $db) or
trigger_error(mysqli_error($link),E_USER_ERROR);
mysqli_query($link, "SET NAMES cp1251;") or die(mysqli_error($link));
mysqli_query($link, "SET CHARACTER SET cp1251;") or die(mysqli_error($link));
$author = $_POST['author'];
$created = $_POST['created'];
$comment = $_POST['comment'];
if (($author)&&($created)&&($comment))
{
$query = "INSERT INTO comments (created, author, comment, art_id) VALUES ('$created','$author', '$comment', $note_id)";
$result = mysqli_query ($link, $query);
}
?>
