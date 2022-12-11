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
        class NameFname{
            public $name ='Иван';
            public $fname ="Иванов";
            public function hello(){
                echo "hello ".$this->name." ". $this->fname;
            }
            public function hello2($name2,$fname2){
                echo "hello ".$name2." ". $fname2;
            }
        }
        $variable = new NameFname();
        $variable ->hello();
        echo'<br>';
        $variable ->hello2('Карл',"Генадиевич");
    ?>
</body>
</html>
