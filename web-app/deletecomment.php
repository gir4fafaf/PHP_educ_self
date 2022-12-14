<?php
$note = $_GET['note'];
$note_id = $_GET['noteid'];
require_once ("MySiteDB.php");
?>
<html>
<body>
<p>Страница удаления комментария </p>
<form id="deletecomm" name="deletecomm" method="post" >
<button name="delete" value="delete" id="delete">Удалить</button>
</form>
<a href='comments.php?note=<?php echo $note_id  ?>'>Назад</a><br>
<p><a href="blog.php">На главную страницу сайта</a></p>
<?php
$delete = $_POST['delete'];
if ($delete)
{
$delete_query = "DELETE FROM comments WHERE id = $note";
$delete_result = mysqli_query ($link, $delete_query);
echo '<p>Комментарий удален</p>';
}
?>
</body>
</html>