<!-- Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. 
Trier les titres par ordre alphabétique. 
Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.-->

<ul>
    <?php
    foreach ($showTitles as $showTitle) { ?>
        <li><?='Spectacle'.$showTitle->title.' '.'par: '. $showTitle->performer .' '.'le :' . $showTitle->date .''.'à '.$showTitle->startTime ?></li>
    <?php } ?>
</ul>