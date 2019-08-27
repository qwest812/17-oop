<?php
//Метод __invoke() вызывается, когда скрипт пытается выполнить объект как функцию.

class CallableClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$obj = new CallableClass;
$obj(5);
var_dump(is_callable($obj));
?>