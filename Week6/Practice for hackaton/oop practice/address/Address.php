<?php

class Address
{
    public $street = null;
    public $house_nr = null;

    public function __toString()
    {
        return "<h2>".$this->street.$this->house_nr."</h2";
    }
}