<?php
require_once "group.php";
class Team 
{ 
    public $name, $nameofcountry;

    function __construct($name)
    {
        $this->name = $name;
    }
     
    function displayInfo()
    {
        echo  ($this->name.' '.$this->nameofcountry);
    }

    function setCountry($text)
    {
     $this->nameofcountry=$text;
    }

}


?>