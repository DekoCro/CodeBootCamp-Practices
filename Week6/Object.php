<?php

class Address
{
    static protected $local_country = null;

    public $name = null;
    public $street = null;
    public $house_nr = null;
    public $city = null;
    public $country = null;
    public $postal_code = null;
    
    public static function setLocalCountry($country_name)
    {
       static::$local_country = $country_name;
    }
}

$here = new Address;

$here::setLocalCountry("croatia");

var_dump($here);


