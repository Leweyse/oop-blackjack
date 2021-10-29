<?php
declare(strict_types=1);

require 'src/Suit.php';
require 'src/Card.php';
require 'src/Deck.php';

require 'src/Player.php';
require 'src/Dealer.php';
require 'src/Blackjack.php';

//  including the class before calling session_start();
session_start();

$deck = new Deck();
$deck->shuffle();
// foreach($deck->getCards() AS $card) {
//     echo $card->getUnicodeCharacter(true);
// }

$game = $player = $dealer = null;
$playerScore = $dealerScore = 0;

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

if (($dealer -> hasLost())) {
    echo "dealer have lost!";
    echo "Destroy Blackjack variable";

    unset($_SESSION['Blackjack']);
}

require 'indexTemplate.php';