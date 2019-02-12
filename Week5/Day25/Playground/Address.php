<?php

class Address
{
    public $street = null;
    public $house_nr = null;

    public function __toString()
    {
        return $this->street . $this->house_nr;
    }
}
