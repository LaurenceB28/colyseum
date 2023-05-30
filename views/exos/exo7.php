<!-- Afficher tous les clients comme ceci :
Nom : Nom de famille du client
Prénom : Prénom du client
Date de naissance : Date de naissance du client
Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)
Numéro de carte : Numéro de la carte fidélité du client s'il en possède une. -->


<ul>
    <?php
    foreach ($clientsIDs as $clientsID) { ?>
        <li><?='Nom de famille : '.$clientsID->lastName.' '.'Prénom : '.$clientsID->firstName.' '.'Né le : '.$clientsID->birthDate.' '. 'Carte de fidélité : '.$clientsID->cardTypesId.''.'Numéro de carte de fidélité'.$clientsID->cardNumber?></li>
    <?php } ?>
</ul>