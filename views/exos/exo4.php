<!--N'afficher que les clients possédant une carte de fidélité.-->

<ul>
    <?php
    foreach ($clientFidCardOnly as $client) {
        echo '<li>' . $client->firstName . ' ' . $client->lastName. ' ' . $client->cardNumber . '</li>';
    } ?>
</ul>