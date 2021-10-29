<?php 
declare(strict_types=1);

function checkMethod(&$game, &$player, &$dealer, &$playerScore, &$dealerScore) {
    global $disabled;

    if ($game != null) {
        if (isset($_POST['hit'])) {
            $player -> hit($game -> getDeck());
            $playerScore = $player -> getScore();

            if ($player -> hasLost()) {
                echo "Player loses!";

                $disabled = true;

                unset($_SESSION['Blackjack']);
                setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);
            }
        }

        if (isset($_POST['stand'])) {
            $dealer -> hit($game -> getDeck());
            $dealerScore = $dealer -> getScore();

            if ($dealer -> hasLost()) {
                echo "Dealer loses!";

                $disabled = true;

                unset($_SESSION['Blackjack']);
                setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);

            } elseif ($playerScore > $dealerScore) {
                echo "You win!";

                $disabled = true;

                unset($_SESSION['Blackjack']);
                setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);

            } elseif ($playerScore < $dealerScore) {
                echo "Dealer wins!";

                $disabled = true;

                unset($_SESSION['Blackjack']);
                setBlackjack($game, $player, $dealer, $playerScore, $dealerScore);

            } else {
                echo "You and Dealer wins!";

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