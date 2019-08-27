<?php
//__call() запускается при вызове недоступных методов в контексте объект.
//
//__callStatic() запускается при вызове недоступных методов в статическом контексте.


class MethodTest {
    public function __call($name, $arguments) {
        // Замечание: значение $name регистрозависимо.
        echo "Вызов метода '$name' "
            . implode(', ', $arguments). "\n";
    }

    /**  Начиная с PHP 5.3.0  */
    public static function __callStatic($name, $arguments) {
        // Замечание: значение $name регистрозависимо.
        echo "Вызов статического метода '$name' "
            . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('в контексте объекта');

MethodTest::runTest('в статическом контексте');  // Начиная с PHP 5.3.0