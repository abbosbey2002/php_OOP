<link rel="stylesheet" href="style.css">
<?php 

// private
// public
// protect

// abstract class Car{
//     public $name;
//     public $speed;
//     public $price;
//     private $oil;

//     public function __construct($name, $speed, $price, $oil){
//         $this->name=$name;
//         $this->speed=$speed;
//         $this->price=$price;
//         $this->oil=$oil;
//     }
//     public function getOil(){
//         return 'oil '.$this->oil;
//     }
//     public function drive(){
//         return 'this car is driving on oil ' ;
//     }
//     abstract public function stop();
//     public function setModel($name, $speed, $price){
//         $this->name=$name;
//         $this->speed=$speed;
//         $this->price=$price;
//     }

// }
// class ElectroCar extends Car{
//     public $battery;

//     public function charge(){
//         return 'this car charging....';
//     }
//     public function stop(){
//         return $this->name.' is  stopped at '. date_create()->format('Y-m-d H:i:s');
//     }

// }
// $tesla=new ElectroCar ('tesla', 230, 50000, 4);
// $tesla->battery=400;
// echo $tesla->stop();
// $ki=new ElectroCar('KI', 200, 40000, 5);
// echo $ki->stop();

// Interface

// Interface Animal{
//     public function makeSound();
//     public function eat();
// }

// class Dog implements Animal{

//     public $sound;
//     public function __construct($sound){
//         $this->sound=$sound;
//     }
//     public function makeSound(){
//         return 'make a sound'.$this->sound;
//     }
//     public function eat(){
//         return 'eat';
//     }
// }

// class Cat implements Animal{
//     public function makeSound(){
//         return 'make a sound'.$this->sound;
//     }
//     public function eat(){
//         return 'eat';
//     }
// }

// $rex=new Dog('VOV VOV');
// echo $rex->makeSound();


//  trait method

// trait Animal{
//     public function eat(){
//         return 'eat';
//     }
   
//     public function walk(){
//         return 'walking';
//     }
//     public function drinking(){
//         return 'just drink water';
//     }
//     public function makeSound(){
//         return 'make sound'. $this->sound;
//     }
// }


// class Animals{
//     use Animal;
//     public $name;
//     public $sound;
//     public function __construct($name, $sound){
//         $this->name=$name;
//         $this->sound=$sound;
//     }
    
// }


// $rex=new Animals('rex,', 'vov vov');
// echo $rex->makeSound();



require 'autoload.php';

$rex=new Dog();
$cat=new Cat();
$cat->name='Kisa';

// one address belongs to double obj;
$cat2=$cat;

// cat2 clone from cat;
$cat2= clone $cat;

$cat->name='maria';

echo 'cat2 '. $cat2->name.'<br>';

echo 'cat '. $cat->name;





// var_dump($rex->run());