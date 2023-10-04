<?php

require "config.classes.php";

class Register extends Config{

  public  $firstName ='';
  public  $lastName='';
  public  $project ='';
   public $data ='';


   public function setData($name, $mail, $user, $pass){

    $this->firstName = $name;
    $this->lastName =$user;
    $this->project = $mail;
    $this->date = $pass;
   }


    public function AddUser(){

    
    $data = $this->getData();
     $profile =array(
    'id'=>count($data)+1,
    'firstName'=>$this->firstName,
    'lastName'=>$this->lastName,
    'project'=>$this->project,
    'date'=>$this->date,
    );  


    
    array_push($data, $profile);
    $en_dataList = json_encode($data);

    file_put_contents('user.json', $en_dataList);  


    }


}

?>