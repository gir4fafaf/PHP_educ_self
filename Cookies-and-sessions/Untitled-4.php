<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $nick=$_POST['nick'];
     setcookie("nick",$nick,time()+5);
     if(isset($_COOKIE['nick'])){
         echo $_COOKIE['nick']."<br>"; 
         echo date('d.m.Y');
     } 
    ?>
<form action="" method="POST">
<input type="text" name="nick">
<input type="submit">
</form>
</body>
</html>