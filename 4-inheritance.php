<?php

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . PHP_EOL. '<br>';
    }

    public function printPHP()
    {
        echo 'PHP просто супер.' . PHP_EOL.'<br>';
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo __CLASS__ .": ". $string . PHP_EOL.'<br>';
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Выведет: 'Foo: baz'

$foo->printPHP();       // Выведет: 'PHP просто супер'

$bar->printItem('baz'); // Выведет: 'Bar: baz'
$bar->printPHP();       // Выведет: 'PHP просто супер'