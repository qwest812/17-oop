<?php
//Метод __toString() позволяет классу решать, как он должен реагировать при преобразовании в строку. Например, что вывести при выполнении echo $obj;. Этот метод должен возвращать строку, иначе произойдёт фатальная ошибка уровня E_RECOVERABLE_ERROR.

class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('Привет');
echo $class;