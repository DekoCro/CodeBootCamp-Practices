<?php

class BlogPost
{
    public $id = null;
    public $headline = null;
    public $text = null;
    public $added_at = null;
    public $iuser_idd = null;
    public $status = 'not-published';

    public function publish()
    {
        $this->status = 'published';
    }

    public function __construct($user_id, $headline = null)
    {
        $this->headline = $headline;

        $this->added_at = date('Y-m-d');

        global $all_posts;
        $all_posts[] = $this;

        global $total_points;
        $total_points++;
        
    }

    public function __destruct()
    {
        global $total_points;
        $total_points--;
    }
}