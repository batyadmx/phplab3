<?php

namespace App;

class MagicClass{

    public $a;
    public $b;

    public function __sleep(){
        echo "Вызывается при вызове метода serialize() \n";
        return [ "a", "b" ];
    }

    public function __wakeup(){
        echo "Вызывается при вызове метода unserialize() \n";
    }

    public function __clone(){
        echo "Вызывается при клонировании объекта.";
    }

    public function __invoke($str){
        echo "Привет, $str!";
    }

    public function __toString()
    {
        return "Мой магический класс! a = $this->b, b = $this->b";
    }

    public function __serialize() : array
    {
        echo "Вызывается при вызове serialize(). \n";
        return [
            "a" => $this->a,
            "b" => $this->b
        ];
    }

    public function __unserialize(array $arr) : void
    {
        echo "Вызывается при вызове deserialize(). \n";
        $this->a = $arr["a"];
        $this->b = $arr["b"];
    }

    public function __isset($name){
        echo "Вызов функции isset для недоступного или несуществующего свойства. \n";
        return isset($this->$name);
    }

    public function __unset($name){
        echo "Вызов функции unset для недоступного или несуществующего свойства. \n";
    }

    public function __get($name){
        echo "Вызывается при попытке получить значение приватного или несуществующего свойства\n";
        return $this->$name;
    }

    public function __set($name, $value){
        echo "Вызвается при попытке присвоить значение привaтному или несуществующему свойству.\n";
        $this->$name = $value;
    }

    public function __construct($a, $b)
    {
        $this->a=$a;
        $this->b=$b;
        //echo "Вызывается при создании объекта.\n";
    }

    public function __destruct()
    {
        //echo "Вызывается при удалении объекта\n";
    }

    public static function __callStatic($name, $args){
        //echo "Запускается при вызове недоступных методов в статическом контексте. \n";
    }

    public static function sum($a, $b){
        return $a + $b;
    }

    private static function doMagic(){
        return null;
    }

}
