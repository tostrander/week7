<?php

class Dog extends Pet
{
    function talk()
    {
        echo "<p>".$this->getName()." says 'Woof'";
    }
}