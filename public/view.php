<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Blackjack</title>
</head>
<body>
    <aside class="status">
        <?php
            echo "<p>$status</p>";
        ?>
    </aside>
    <main>
        <?php
            if ($game != null) {
                playerComponent($player, $playerScore);
                playerComponent($dealer, $dealerScore);

                formComponent($disabled);
            } else {
                formComponent(true);
            }
        ?>
    </main>
</body>
</html>