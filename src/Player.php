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
        $cards = $this -> cards;
        $cardsValue = [];

        foreach ($cards as $key) {
            array_push($cardsValue, $key -> getValue());
        }

        $score = array_reduce($cardsValue, function ($carry, $value) {
            $carry += $value;
            return $carry;
        });

        return $score;
    }

    public function hasLost() {

    }
}