<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 07.02.2018
 * Time: 21:40
 */


$name="Aleksandr";
$age="-5";
echo "Меня зовут $name<br>";
echo "Мне $age лет<br>";
if (17<$age and $age<60){
    echo "Вам еще работать и работать";
}
elseif ($age>59){
    echo "Вам пора на пенсию";
}
elseif (0<$age and $age<18){
    echo "Вам еще рано работать";
}
else{
    echo "Неизвестный возраст";
}