<?php
class MyDestructableClass
{
    function __construct() {
        print "Конструктор\n";
    }

    function __destruct() {
        print "Уничтожается " . __CLASS__  . "\n";
    }
}

$obj = new MyDestructableClass();


