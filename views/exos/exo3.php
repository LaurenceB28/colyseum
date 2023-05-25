<!-- Afficher les 20 premiers clients.-->

<div>
    <h2>les 20 premiers clients</h2>
</div>
<ul>
    <?php
    foreach ($clientTwenty as $client) {
        echo '<li>' . $client->firstName . ' ' . $client->lastName . '</li>';
    } ?>
</ul>