<?php

class Car extends Vehicle
{
   public $wheels_count = 4;

   public function change_color($color)
   {
       $this->color = $color;
   }
}