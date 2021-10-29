<?php 
    function cardsComponent($arr) {
        echo "<section>";
        foreach($arr as $card) {
            echo $card -> getUnicodeCharacter(true);
        }
        echo "</section>";
    }