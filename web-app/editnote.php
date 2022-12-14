<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование заметки</title>
</head>
<body>
    <p>Страница редактирования заметки </p>
    <form id="editnote" name="editnote" method="post">
    <label for="title">Заголовок заметки</label>
    <input type="text" name="title" id="title" required>
    <label for="article">Текст заметки </label>
    <textarea name="article" id="article" required></textarea>
    <input type="hidden" name ="note" id ="note">
    <input type="submit" name="submit" id="submit" value="Изменить">
    </form>
    <a href="blog.php">Вернуться на главную страницу сайта</a>
    
</body>
</html>
<?php
require_once ("MySiteDB.php");
$note_id = $_GET['note'];
$select_db = mysqli_select_db ($link, $db);
$query = "SELECT * FROM notes WHERE id = $note_id";
$result = mysqli_query ($link, $query);
$submit = $_POST['submit'];
if ($submit){
$edit_note = mysqli_fetch_array ($result);
$title = $_POST['title'];
$article = $_POST['article'];
$update_query = "UPDATE notes SET title = '$title', article = '$article' WHERE id = $note_id";
$update_result = mysqli_query ($link, $update_query);
}
?>