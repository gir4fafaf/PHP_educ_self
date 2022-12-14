<?php
$note_id = $_GET['note'];
require_once ("MySiteDB.php");
$select_db = mysqli_select_db ($link, $db);
$query = "SELECT * FROM notes WHERE id = $note_id";
$result = mysqli_query ($link, $query);
$delete_note = mysqli_fetch_array ($result);
?>
<html>
<body>
<p>Страница удаления заметки </p>
<form id="editnote" name="editnote" method="post" >
<button name="delete" value="delete">Удалить</button>
</form>
<p><a href="blog.php">На главную страницу сайта</a></p>
<?php
$delete = $_POST['delete'];
if ($delete)
{
$delete_query = "DELETE FROM notes WHERE id = $note_id";
$delete_result = mysqli_query ($link, $delete_query);
echo '<p>Запись удалена</p>';
}
?>
</body>
</html>