<?php

require "register.classes.php";

if(isset($_POST['submit'])){

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$project = $_POST['project'];
$date = $_POST['date'];




 $register =  new Register();
$register->setData($firstName, $lastName, $project, $date);


$register->AddUser();


echo "Information submitted";

}

?>