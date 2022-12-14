
<?php
require_once ("MySiteDB.php");
$note_id = $_GET['note']; 
$query = "SELECT created, title, article FROM notes WHERE id = $note_id";
$query_comments = "SELECT * FROM comments WHERE art_id=$note_id"; 
if($result = $link->query($query_comments)){
    echo '<table border=1>';
    foreach($result as $note)
    {
        echo '<tr>';
        echo "<td>".$note['created']. "</td>";
        echo "<td>".$note['author']. "</td>";
        echo "<td>".$note['comment']. "</td>";
        echo "<td><a href='deletecomment.php?noteid=".$note_id."&note=".$note['id']."'>Удалить</a></td>";
        echo '</tr>';
    }
    echo '</table>'; 
}
if($note['author']==''){ 
    echo '<script>var tables = document.getElementsByTagName("TABLE");
    for (var i=tables.length-1; i>=0;i-=1)
       if (tables[i]) tables[i].parentNode.removeChild(tables[i]);</script>';
    echo 'Комментариев нет<br>';
}
echo '<a href="addcomment.php?note='.$note_id.'">Добавить комментарий </a><br>';
echo '<a href="editnote.php?note='.$note_id.'">Исправить заметку </a><br>';
echo '<a href="deletenote.php?note='.$note_id.'">Удалить заметку </a>';
echo '<br><p><a href="blog.php">На главную страницу сайта</a></p>';
?>