<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require 'Habitation.php';
require 'Appartement.php';
require 'Maison.php';

$maison1 = new Maison('France', 'Fourmies', 59610, 4, 12, 2, true, true);
echo "<br> Pays: ".$maison1->getPays();
echo "<br> Ville: ".$maison1->getVille();
echo "<br> Code postal: ".$maison1->getCodePotal();
echo "<br> Chambres: ".$maison1->getChambres();
echo "<br> Pièces: ".$maison1->getPieces();
echo "<br> Etages: ".$maison1->getEtages();
echo "<br> Garage: ".$maison1->isGarage();
echo "<br> Jardin: ".$maison1->isJardin();

echo "<br><br>";

$maison2 = new Maison('France', 'Valenciennes', 59610, 12, 42, 6, false, true);
echo "<br> Pays: ".$maison2->getPays();
echo "<br> Ville: ".$maison2->getVille();
echo "<br> Code postal: ".$maison2->getCodePotal();
echo "<br> Chambres: ".$maison2->getChambres();
echo "<br> Pièces: ".$maison2->getPieces();
echo "<br> Etages: ".$maison2->getEtages();
echo "<br> Garage: ".$maison2->isGarage();
echo "<br> Jardin: ".$maison2->isJardin();

echo "<br><br><br><br>";

$appartement = new Appartement('France', 'Valenciennes', 59300, 1, 5,  false);
$appartement->setPays("Italy");
$appartement->setVille("Naples");
$appartement->setCodePotal(00000);
$appartement->setChambres(2);
$appartement->setPieces(6);
$appartement->setGarage(true);

echo "<br> Pays: ".$appartement->getPays();
echo "<br> Ville: ".$appartement->getVille();
echo "<br> Code postal: ".$appartement->getCodePotal();
echo "<br> Chambres: ".$appartement->getChambres();
echo "<br> Pièces: ".$appartement->getPieces();
echo "<br> Garage: ".$appartement->isGarage();
