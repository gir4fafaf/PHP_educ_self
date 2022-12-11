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
        class Worker{
            
            public $name, $age, $salary;
            function __construct($name,$age,$salary){
                $this->name = $name;
                if (($age >=100)||($age <0)) {
                    echo 'Возраст не валидный <br>';                    $this->age = 0;
                }else{
                    $this->age = $age;
                    echo ($age.'<br>');
                }
                $this->salary = $salary;
            }
            function getSalary(){
                return $this ->salary;
            }
            function getAge(){
                return $this ->age;
            }
            function setAge($age)
            {
                if (($age >=100)||($age <0)) {
                    echo 'Возраст не валидный <br>';
                    $this->age = 0;
                }else{
                    $this->age = $age;
                    echo ($age.'<br>');
                }
            }
        }
        $worker1 = new Worker('Иван',125,1000);
        $worker2 = new Worker('Вася',26,2000);
        echo $worker1 ->getSalary()+$worker2 -> getSalary();
        echo '<br>';
        echo $worker2 ->getAge()+$worker1 ->getAge();
        echo '<br>';
    ?>
</body>
</html>
