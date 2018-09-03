<?php
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class B extends A {
    public static function who() {

        echo __CLASS__;
    }
}

B::test();
?>

<?php
class MyClass {

const myarray = array("foo", "bar", "hallo", "world");

public static function testwords($test) {

  foreach (MyClass::myarray as $key => $value) {
    // code...
  if ($test == $value) {
    echo 'слово найдено';
    return $test;
  }

  }
}

}

$test = 'foo';

echo MyClass::testwords($test); // обратились к публичной функции в классе и получили результат

?>

<?php
class Foo {
    public static function aStaticMethod() {
      echo self::class;   // возвращает название класса
    }
}

echo Foo::aStaticMethod();

?>
