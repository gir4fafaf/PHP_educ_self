<?php 
$email=$_POST["email"];  
$mess=$_POST["mess"];  
if (empty($email) || empty($mess))
{
echo "<center>Ошибка, вы не ввели данные или не правельные данные.</center>";  
exit;
}
echo 'Ваше сообщение успешно отправлено';
?>