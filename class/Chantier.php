<?php

include_once("class/ListeChantier.php");

class Chantier{
    private $annee;
    private $mois;
    private $client;
    public function __construct($annee, $mois, $client){
        $this->annee = $annee;
        $this->mois = $mois;
        $this->client = $client;
    }
    public function getAnnee(){
        return $this->annee;
    }
    public function getMois(){
        return $this->mois;
    }
    public function getClient(){
        return $this->client;
    }

}