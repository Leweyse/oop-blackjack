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
$dealer = new Player($deck);

if (!isset($_SESSION['Blackjack'])) {
    $blackjack = new Blackjack($player, $dealer, $deck);
    $_SESSION['Blackjack'] = $blackjack;
}

if (isset($_GET['state'])) {
    if ($_GET['state'] == 'hit') {
        $player -> hit();
    }

    if ($_GET['state'] == 'surrender') {
        $player -> surrender();
    }

    if ($_GET['state'] == 'stand') {
        echo "stand";
    }
}

require 'indexTemplate.php';