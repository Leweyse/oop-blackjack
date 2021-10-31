<?php 
    function cardsComponent($arr) {
        echo "<section>";
        foreach($arr as $card) echo $card -> getUnicodeCharacter(true);
        if (count($arr) === 1) {
            $back = new Card(Suit::SPADE(), 0);
            echo  $back -> getUnicodeCharacter(true);
        }
        echo "</section>";
    }