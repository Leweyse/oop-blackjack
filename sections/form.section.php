<?php
declare(strict_types=1);

function formComponent($disabled) {
    echo "<form method='post'>";
    inputComponent($disabled, 'hit', 'Hit');
    inputComponent($disabled, 'stand', 'Stand');
    inputComponent($disabled, 'surrender', 'Surrender');
    inputComponent(false, 'newGame', 'New Game');
    echo "</form>";
}