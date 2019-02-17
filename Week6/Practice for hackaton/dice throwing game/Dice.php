<?php


class Dice
{
    public $value = null;
    public $sides = 6;

    public function __construct($num_sides = 6)
    {
        $this->sides = $num_sides;
    }

    public function roll()
    {
        $this->value = rand(1, $this->sides);
    }

    public function __toString()
    {
        return '<div class="die">' .$this->value. '</div>';
    }
}