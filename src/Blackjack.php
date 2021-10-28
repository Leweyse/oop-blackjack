<?php
declare(strict_types=1);

class Blackjack
{
    private Player $player;
    private Player $dealer;
    private Deck $deck;

    public function __construct(Player $player, Player $dealer, Deck $deck)
    {
        $deck = new Deck();
        $deck -> shuffle();

        $player = new Player($deck);
        $dealer = new Player($deck);

        $this -> player = $player;
        $this -> dealer = $dealer;
        $this -> deck = $deck;
    }

    public function getPlayer() : Player
    {
        return $this -> player;
    }

    public function getDealer() : Player
    {
        return $this -> dealer;
    }

    public function getDeck() : Deck
    {
        return $this -> deck;
    }
}