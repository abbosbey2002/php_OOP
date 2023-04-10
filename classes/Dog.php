<?php
abstract class Animals{
    public function makeSound(){
        return 'sound';
    }
}

class Dog extends Animals{
    public static $age=5;
    public function run(){
        $this->eat();
        return 'running';
    }
    public static function eat(){
        return 'eating';
    }
}