<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Главная </title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="Введите тему" maxlength="150" name="title" required><br>
        <input type="email" name="email" placeholder="Введите ваш email" maxlength="50" required><br>
        <textarea name="message" placeholder="Введите сообщение" maxlength="150" required></textarea><br>
        <input type="submit" value="Отправить письмо">
    </form>
    <p><a href="blog.php">На главную страницу сайта</a></p>
</body>
</html>
<?php
$title = trim($_POST['title']);
$to = 'abdurachman.5@mail.ru';
$from = trim($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);
$message = trim($message);
$headers = "From: $from" . "\r\n" . 
"Reply-To: $from" . "\r\n" . 
"X-Mailer: PHP/" . phpversion();

if($title!=''){
if(mail($to,$title,$message,$headers)){
    echo 'Письмо отправлено';
}
else {
    echo 'Письмо не отправлено';
}
}

?>