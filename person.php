<?php
class Person
{
    public $firstName;
    public $lastName;

    function __construct($firstName, $lastname)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastname;
    }
    function greetings(){
        return "Hola " . $this->firstName . " " . $this->lastName;
    }
}
