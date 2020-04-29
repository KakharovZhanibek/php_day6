<?php

/**
 * 2. Функция для автозагрузки должна использовать полное имя класса для определения нужного файла
 * т.е. при вызове для класса pd\namesace1\subnamespace\Class1 
 * должнен быть подключен файл "./namespace1/subnamespace/Class1.php"
 * 
 * ? какой из вариантов require или require_once лучше использовать?
 */

// > зарегистрировать вашу функцию для автозагрузки
spl_autoload_register(function($name){
    var_dump($name);
    $temp=str_replace ("pd\\", "" , $name);
    require($temp . ".php");
    //require(str_replace ("pd\\", "" , $name) . ".php");
});