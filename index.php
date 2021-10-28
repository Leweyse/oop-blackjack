<?php
declare(strict_types=1);

require 'src/Suit.php';
require 'src/Card.php';
require 'src/Deck.php';

require 'src/Player.php';
require 'src/Blackjack.php';

$deck = new Deck();
$deck->shuffle();
foreach($deck->getCards() AS $card) {
    echo $card->getUnicodeCharacter(true);
    echo '<br>';
}
