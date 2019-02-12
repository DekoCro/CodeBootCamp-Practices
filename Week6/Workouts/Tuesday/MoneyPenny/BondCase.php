<?php

namespace MoneyPenny;


class BondCase
{
    static protected $cases_solved = 0;
    static protected $girls_met = 0;

    public static function getAvgGirlsPerCase()
    {
        return static::$girls_met / static::$cases_solved;
    }


    protected $name = null;
    protected $year = null;
    protected $enemy = null;
    protected $girls = [];

    public function __construct($year)
    {
        $this->year = $year;

        static::$cases_solved++;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function setYear($value)
    {
        $this->year = $value;
    }

    public function setEnemy($value)
    {
        $this->enemy = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getEnemy()
    {
        return $this->enemy;
    }

    public function addGirl($name)
    {
        $this->girls[] = $name;

        static::$girls_met++;
    }

    
}