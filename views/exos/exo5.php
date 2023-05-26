<!-- Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
Les afficher comme ceci :
Nom : Nom du client
Prénom : Prénom du client
Trier les noms par ordre alphabétique. -->

<ul>
    <?php
    foreach ($clientsMonly as $client) { ?>
        <li><?='Nom : '. $client->firstName .' '.'Prénom :' . $client->lastName ?></li>
    <?php } ?>
</ul>