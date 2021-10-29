<?php 
    function playerComponent($player, $playerScore) {
        echo "<article>";
        scoreComponent($playerScore);
        cardsComponent($player -> getCards());
        echo "</article>";
    }