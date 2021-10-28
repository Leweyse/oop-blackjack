<?php
declare(strict_types=1);

class Player
{
    private $cards = [];
    private $lost = false;

    public function __construct(Deck $deck)
    {
        global $cards;
        global $lost;

        $cards[] = $deck -> drawCard();
        $cards[] = $deck -> drawCard();

        $this -> cards = $cards;
        $this -> lost = $lost;
    }

    public function hit() {

    }

    public function surrender() {

    }

    public function getScore() {

    }

    public function hasLost() {

    }
}