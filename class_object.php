<?php

class User 
{
    public $name;

    public function __construct($name = "")
    {
        $this->name = $name;
    }
}

$user1 = new User;

echo $user1->name = "Test Nama";