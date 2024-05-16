<?php
abstract class Animal{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    abstract public function makeSound();
}

class Dog extends Animal{
    public function makeSound()
    {
        return "Bup, bup";
    }
}

class Cat extends Animal{
    public function makeSound()
    {
        return "Meuuu";
    }
}

$cat = new Cat("Mustikad");
$dog = new  Dog("Aika");

echo "Em dic " . $cat->getName() . ", i faig " . $cat->makeSound().PHP_EOL;
echo "Em dic " . $dog->getName() . ", i faig " . $dog->makeSound().PHP_EOL;

?>