<?php

class Board
{
    public function __toString()
    {
        $html = '';
        $html .= '<div class="board">';
        for($x = 0; $x < 8; $x++) {
            $html .= '<div class="row">';

            for($y = 0; $y < 8; $y++) {
                $html .= '<div class="column">';
            }
        }
    }
}