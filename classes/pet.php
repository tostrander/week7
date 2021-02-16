<?php

/* pet.php
   Represents a Pet object
*/

class Pet
{
    private $_name;
    private $_color;

    function __construct($name="unknown", $color="unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function getName()
    {
        return $this->_name;
    }

    function getColor()
    {
        return $this->_color;
    }

    function eat()
    {
        echo "$this->_name is eating<br>";
    }

    function talk()
    {
        echo "$this->_name is talking<br>";
    }

    function __toString()
    {
        return "<p>$this->_name is $this->_color</p>";
    }
}