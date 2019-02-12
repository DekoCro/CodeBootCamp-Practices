<?php

class Warehouse
{
    public $name = null;
    protected $nr_of_crates = 0;
    protected $crates = [];

    public function addCreate($creates_to_add)
    {
        $this->crates[] = $creates_to_add;

        $this->nr_of_crates++;
    }
}