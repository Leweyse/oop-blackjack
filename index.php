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

include "helpers/checkMethod.php";

$game = $player = $dealer = null;
$playerScore = $dealerScore = 0;

if (!isset($_SESSION['Blackjack'])) {
    $blackjack = new Blackjack();
    $_SESSION['Blackjack'] = $blackjack;
} else {
    $game = $_SESSION["Blackjack"];
    $player = $game -> getPlayer();
    $dealer = $game -> getDealer();

    $playerScore = $player -> getScore();
    $dealerScore = $dealer -> getScore();
}

if($_SERVER['REQUEST_METHOD']=='POST') {
    checkMethod($game, $player, $dealer, $playerScore, $dealerScore);
}

if (($player -> hasLost())) {
    echo "Player have lost!";
    echo "Destroy Blackjack variable";
}

if (($dealer -> hasLost())) {
    echo "dealer have lost!";
    echo "Destroy Blackjack variable";

    unset($_SESSION['Blackjack']);
}

require 'indexTemplate.php';