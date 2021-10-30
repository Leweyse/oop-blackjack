<?php
declare(strict_types=1);

function checkMethod(&$game, &$player, &$dealer, &$playerScore, &$dealerScore) {
    global $status;
    global $disabled;

    if ($game != null) {
        if (isset($_POST['hit'])) {
            $player -> hit($game -> getDeck());
            $playerScore = $player -> getScore();

            if ($player -> hasLost()) {
                $status = "You lose!";

                $disabled = true;

                unset($_SESSION['Blackjack']);
                setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);
            }
        }

        if (isset($_POST['stand'])) {
            $dealer -> hit($game -> getDeck());
            $dealerScore = $dealer -> getScore();

            if ($dealer -> hasLost()) {
                $status = "You win!";

                $disabled = true;

                unset($_SESSION['Blackjack']);
                setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);

            } elseif ($playerScore > $dealerScore) {
                $status = "You win!";

                $disabled = true;

                unset($_SESSION['Blackjack']);
                setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);

            } elseif ($playerScore < $dealerScore) {
                $status = "You lose!";

                $disabled = true;

                unset($_SESSION['Blackjack']);
                setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);

            } else {
                $status = "Draw!";

                $disabled = true;

                unset($_SESSION['Blackjack']);
                setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);

            }
        }

        if (isset($_POST['surrender'])) {
            $player -> surrender();
            echo "You lose";

            $disabled = true;

            unset($_SESSION['Blackjack']);
            setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);
        }
    }
}