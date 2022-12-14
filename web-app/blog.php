<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блог</title>
</head>
<body>
    <table><tr>
        <td><a href="">Войти</a></td>
        <td>|</td>
        <td><a href="newnote.php">Новая запись</a></td>
        <td>|</td>
        <td><a href="email.php">Отправить сообщение</a></td>
        <td>|</td>
        <td><a href="">Фото</a></td>
        <td>|</td>
        <td><a href="">Файлы</a></td>
        <td>|</td>
        <td><a href="">Администратору</a></td>
        <td>|</td>
        <td><a href="inform.html">Информация</a></td>
        <td>|</td>
        <td><a href="">Выйти</a></td>
    </tr></table><br>
    <div style="font-style: italic;">
    <p>Рад приветствовать вас</p>
    <p>На страницах моего сайта, посвящённого путешествиям!</p>
    <p>Здесь я буду рассказывать о своих путешествиях...</p>
    <p>... и выкладывать разные интересные материалы!</p>
    </div>

    <?php
    //require_once('create_db.php');
    //require_once('create_user.php');
    //require_once('create_tbl.php');
    require_once('MySiteDB.php');
    $sql="SELECT * FROM notes";

    if($result = $link->query($sql)){
    echo '<table border=1>';
    echo '<tr><td>id</td><td>Создано</td><td>Название</td><td>Новость</td><td>Комментарий</td></tr>';
    foreach($result as $note)
    {
        echo '<tr>';
        echo "<td> ".$note['id']."</td>";
        echo "<td>".$note['created']. "</td>";
        echo "<td>".$note['title']. "</td>";
        echo "<td>".$note['article']. "</td>";
        echo "<td><a href='comments.php?note=".$note['id']."'>Посмотреть</a></td>";
        echo '</tr>';
    }
    echo '</table>';
    }
    else
    {
        echo 'Записей нет';
    }
    ?>
</body>
</html>