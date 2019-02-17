<?php

class Vehicle
{
    public $wheels_count = null;
    public $color = null;
    public $avg_speed = null;
    
    public function travel($distance)
    {
        return $distance / $this->avg_speed;
    }
}