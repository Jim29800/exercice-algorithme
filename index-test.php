<?php
include_once("class/ListeChantier.php");
include_once("class/Chantier.php");





$jean = new Chantier(1999, "fevrier", "jean");
$dupont = new Chantier(1999, "fevrier", "dupont");
$test = new Chantier(1999, "mars", "test");
$mars = new Chantier(2000, "mars", "jupiter");
$tonton = new Chantier(2001, "avril", "tonton");
$tata = new Chantier(2011, "avril", "tata");


$liste = new ListeChantier();

$liste  ->ajout($dupont)
        ->ajout($jean)
        ->ajout($test)
        ->ajout($mars)
        ->ajout($tonton)
        ->ajout($tata);
        
        
        

var_dump($liste);   
//echo $jean->getAnnee();
echo $liste->affiche();
