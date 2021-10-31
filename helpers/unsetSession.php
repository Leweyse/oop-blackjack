<?php
declare(strict_types=1);

function unsetSession($result) {
    global $status;
    global $disabled;

    if ($result == "win") $status = "You win!";
    elseif ($result == "lose") $status = "You Lose!";
    else $status = "Draw!";

    $disabled = true;

    unset($_SESSION['Blackjack']);
    setBlackjack();
}