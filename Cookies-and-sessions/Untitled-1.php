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
session_start();
$_SESSION['nick']=$nick;
$_SESSION['color']=$color;
if(isset($_SESSION['nick'])){
    echo $_SESSION['nick'];
} 
if($_SESSION['color'] ==1){
echo '<script>document.body.style.background="red"</script>';
}
else if($_SESSION['color'] ==2){
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

 
