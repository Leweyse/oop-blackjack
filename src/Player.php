<?php
declare(strict_types=1);

class Player
{
    private $cards = [];
    private $lost = false;

    private const BJ = 21;
    private const START_CARDS = 2;

    public function __construct(Deck $deck)
    {
        global $cards;
        global $lost;

        for ($i=0; $i < self::START_CARDS; $i++) {
            $cards[] = $deck -> drawCard();
        }

        $this -> cards = $cards;
        $this -> lost = $lost;
        $this -> deck = $deck;
    }

    public function hit() {
        array_push($this -> cards, $this -> deck -> drawCard());

        if ($this -> getScore() > self::BJ) $this -> lost = true;
        else $this -> lost = false;

        return $this -> cards;
    }

    public function surrender() {
        $this -> lost = true;
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