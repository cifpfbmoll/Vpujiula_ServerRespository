<?php

class Puppet{

    public $Name;
    protected $ID;
    private $Age;
    public $Surname;


    function __construct($Name, $ID, $Age, $Surname) {
        $this->Name = $Name;
        $this->ID = $ID;
        $this->Age = $Age;
        $this->Surname = $Surname;
    }

    public function getName(){
        return $this-> Name;
    }
    public function getPrivateAge(){
        return $this->Age;
    }
    
}


?>