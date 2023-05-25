<?php

?>
<!-- exo1 Afficher tous les clients -->
<div>
    <h2>identités des clients</h2>
</div>
<ul>
    <?php
    foreach ($clients as $client) {
        echo '<li>' . $client->firstName . ' ' . $client->lastName . '</li>';
    } ?>
</ul>