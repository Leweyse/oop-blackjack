<?php
declare(strict_types=1);

function checkMethod() {
    global $game;

    if ($game != null) {
        global $player;
        global $dealer;
        global $playerScore;
        global $dealerScore;

        if (isset($_POST['hit'])) {
            $player -> hit($game -> getDeck());
            $playerScore = $player -> getScore();

            if ($player -> getScore()  == 21) unsetSession("win");

            if ($player -> hasLost()) unsetSession("lose");
        }

        if (isset($_POST['stand'])) {
            $dealer -> hit($game -> getDeck());
            $dealerScore = $dealer -> getScore();

            if ($dealer -> hasLost() || $playerScore > $dealerScore) unsetSession("win");
            elseif ($playerScore < $dealerScore) unsetSession("lose");
            else unsetSession("draw");
        }

        if (isset($_POST['surrender'])) {
            $player -> surrender();
            unsetSession("lose");
        }

        if (isset($_POST['newGame'])) {
            if ($player -> getScore()  == 21 || $dealer -> getScore() > 21) unsetSession("win");

            if ($dealer -> getScore() == 21 || $player -> getScore()  > 21) unsetSession("lose");
        }
    }
}