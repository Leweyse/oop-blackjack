<?php
declare(strict_types=1);

function setBlackjack(&$game, &$player, &$dealer, &$playerScore, &$dealerScore) {
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
}