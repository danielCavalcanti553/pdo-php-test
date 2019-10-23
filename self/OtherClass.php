<?php
class MyClass {
    const CONST_VALUE = 'Um valor constante';
}

$classname = 'MyClass';

echo "<br/><br/>";

echo $classname::CONST_VALUE; // A partir do PHP 5.3.0
echo "<br/><br/>";
echo MyClass::CONST_VALUE;


class OtherClass extends MyClass
{
    public static $my_static = 'variável estática';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

echo "<br/><br/> ------------ <br/><br/>";

$classname = 'OtherClass';
echo $classname::doubleColon(); // A partir do PHP 5.3.0
echo "<br/><br/>";
OtherClass::doubleColon();
?>