<!-- exo2 Afficher tous les types de spectacles possibles. -->

<div>
    <h2>Tous les types de spectacles</h2>
</div>

<ul>
    <?php
    foreach ($showtypes as $showtype) { ?>
        <li><?= $showtype->type ?></li>
        <?php } ?>
</ul>