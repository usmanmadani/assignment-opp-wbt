<?php

// Write a basic explanation of Abstraction and clearly demonstrate with two
// or more examples the usage of Abstract class.


// example 1
interface mqa{
    public function structure();
    public function fees();
}
interface nuc {
    public function getstudent();
    public function setstudent();
}
abstract class lincoln implements mqa {

}

// example 2
abstract class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function area();

    abstract public function perimeter();
}

class Circle extends Shape {
    protected $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }

    public function perimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function __construct($name, $width, $height) {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }

    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

$circle = new Circle("Circle", 5);
echo $circle->area(); 
echo $circle->perimeter(); 

$rectangle = new Rectangle("Rectangle", 10, 20);
echo $rectangle->area(); 
echo $rectangle->perimeter(); 

//output 78.539816339745 31.41592653589820060
// area 200
//perimeter 60


// Write an example of php script to demonstrate the use of Namespace


namespace My\Namespace;

class MyClass {
    public function __construct() {
        echo "This is MyClass from My\Namespace namespace";
    }
}

$my_class = new My\Namespace\MyClass();





// Write an OOP Program to demonstrate function overloading and function
// overriding.


class Animal {
    public function speak() {
        echo "Animal speaking";
    }
}

class Dog extends Animal {
    public function speak() {
        echo "Woof!";
    }
}

class Cat extends Animal {
    public function speak() {
        echo "Meow!";
    }
}

$animal = new Animal();
$animal->speak(); 

$dog = new Dog();
$dog->speak(); 

$cat = new Cat();
$cat->speak(); 

// output
//Animal speaking
//  Woof!
// Meow!





// https://www.dropbox.com/scl/fi/dm8juo6yslg5gca8nzc2a/oop-assignment-week2.docx?rlkey=vphvoh3rllepei6476nonxshp&dl=0