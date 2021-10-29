<?php
declare(strict_types=1);

function inputComponent($disabled, $name, $value) {
    if ($disabled) {
        $disableClass = "disabled";
    } else {
        $disableClass = "noDisabled";
    }

    echo "<input class='$disableClass' type='submit' name='$name' value='$value'>";
}