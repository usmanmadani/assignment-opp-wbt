<?php
// Procedural Programming
public class Example { 
    public static void main(String[] commandLi) { 
        display( "Hello world" ); 
    } 
   
    private static void display(String text) { 
      System.out.println(text); 
    } 
  } 
  
// Functional Programming

function add($a, $b) {
    return $a + $b;

// Procedural Programming
class student{

function greet($name){

echo "welcome," .$name."<br>"; 

}


}
$std=new student();
$std->greet("muhammad"); 
$std->greet("aisha");
$std->greet("kamal")


// OOP PHP code that declare a class called Fruit


class Fruit {
    public $name;
    public $color;
    function set_name ($name){
        $this -> name = $name;
    }
function get_name () {
    echo "The name of this fruit is ". $this -> name;
}
}
$fruit = new Fruit();
$fruit -> set_name ("apple");
$fruit -> get_name();
echo "<br/>";
$fruit -> set_name ("orange");
$fruit -> get_name();
echo "<br/>";
$fruit -> set_name ("banana");
$fruit -> get_name();
echo "<br/>";
$fruit -> set_name ("pineapple");
$fruit -> get_name();
?>


