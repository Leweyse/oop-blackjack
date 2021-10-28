<?php
declare(strict_types=1);

session_start();

require 'src/Suit.php';
require 'src/Card.php';
require 'src/Deck.php';

require 'src/Player.php';
require 'src/Blackjack.php';

$deck = new Deck();
$deck->shuffle();
// foreach($deck->getCards() AS $card) {
//     echo $card->getUnicodeCharacter(true);
// }

$player = new Player($deck);
echo $player -> getScore();

require 'indexTemplate.php';