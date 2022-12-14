<?php 
session_start();
$_SESSION["Nam"] = "Mark Maguire";
$_SESSION["E-mail"] = "Nordlin@gmail.com";
echo "Your name and surname: " . $_SESSION["Nam"]. "<br>";
echo "Your E-mail: " . $_SESSION["E-mail"]. "<br>";
?>

<?php

echo '<form method = POST action = "result.php">
<br> E-mail: <input type = "Text" name = "email"><br>
<br> Message<textarea name = "mess"></textarea><br>
<br><input type = "submit" value = "Submit" name="submit"><br>
</form>';

if (isset($_POST['submit'])){   header("Location: cookie_Ex5 copy.php");  }


?>