<?php

class User {
    protected $username;

    public function setUsername($username) {
        $this->username = $username;
    }
}

class Admin extends User {
    public $username;

    public function expressYourRole() {
        return "Admin";
    }

    public function sayHello() {
        return "Hello admin, {$this->username}";
    }
}

$admin1 = new Admin();
$admin1->setUsername("Munir");
echo $admin1->sayHello();
