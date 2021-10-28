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