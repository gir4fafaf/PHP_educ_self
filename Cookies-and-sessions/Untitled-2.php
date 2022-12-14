<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<?php
$nick=$_POST['nick'];
$color=$_POST['color'];
setcookie("nick",$nick,time()+5);
setcookie("color",$color,time()+5);
if(isset($_COOKIE['nick'])){
    echo $_COOKIE['nick'];
} 
if($_COOKIE['color'] ==1){
echo '<script>document.body.style.background="red"</script>';
}
else if($_COOKIE['color'] ==2){
    echo '<script>document.body.style.background="blue"</script>';
    }
?>
<form action="" method="POST">
Введите имя: <input type="text" name="nick"><br>
<select name="color">
<option selected disabled> Выберете цвет</option>
<option value= 1>Красный</option>
<option value=2>Сини</option>
</select><br><br>
<input type="submit">
</form>
</body>
</html>