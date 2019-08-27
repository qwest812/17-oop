<?php
class MyClass {
    public $property;
    function __clone(){
        $this->property = 2;}
}
$myObj = new MyClass();
$myObj->property = 1;
$myObj2 = clone $myObj;
print($myObj->property); // Печатает 1
print($myObj2->property); // Печатает 2