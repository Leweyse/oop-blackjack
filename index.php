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

include "helpers/setBlackjack.php";
include "helpers/checkMethod.php";

include "components/score.component.php";
include "components/cards.component.php";
include "components/input.component.php";

include "sections/player.section.php";
include "sections/form.section.php";

$game = $player = $dealer = null;
$playerScore = $dealerScore = 0;
$status = "Let's start!";
$disabled = false;

setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);

if($_SERVER['REQUEST_METHOD']=='POST') {
    checkMethod($game, $player, $dealer, $playerScore, $dealerScore);
}

require 'public/view.php';