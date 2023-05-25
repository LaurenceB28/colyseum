<!-- exo2 Afficher tous les types de spectacles possibles. -->

<div>
    <h2>Tous les types de spectacles</h2>
</div>

<ul>
    <?php
    foreach ($shows as $show) {
        echo '<li>' . $show->title . ' ' . $show->performer . ' ' . $show->date . '</li>';
    } ?>
</ul>