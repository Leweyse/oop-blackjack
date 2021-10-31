<?php
declare(strict_types=1);

class Dealer extends Player
{
    private const MIN_DEALER = 15;

    public function __construct(Deck $deck)
    {
        $this -> cards[] = $deck -> drawCard();
    }

    /* 
    parent allows access to the inherited class, 
    whereas self is a reference to the class the method running (static or otherwise) belongs to.
    https://stackoverflow.com/a/20887205/14358560
    */

    public function hit(Deck $deck) : void {
        while ($this -> getScore() <= self::MIN_DEALER) parent::hit($deck);
    }
}