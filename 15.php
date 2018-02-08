<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 07.02.2018
 * Time: 22:47
 */


$a=100;
$b=0;
$operator="/";
if ($operator=="+"){
    echo ($a+$b);
}
elseif ($operator=="-"){
    echo ($a-$b);
}
elseif ($operator=="*"){
    echo ($a*$b);
}
elseif ($b==0 and "$a/$b"){
    echo "Ашипка";
}
elseif ($operator=="/"){
    echo ($a/$b);
}
elseif ($operator=="%"){
    echo ($a%$b);
}
