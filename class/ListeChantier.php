<?php
class ListeChantier{
    private $tableau = [];
    public function ajout(Chantier $chantier){
        array_push($this->tableau, $chantier);
        return $this;
    }
    public function affiche(){
        $anneeTemp = 0;
        $html = "";
        $fermeTable = false;
        foreach ($this->tableau as $value) {
            if ($anneeTemp != $value->getAnnee()) {
                if ($fermeTable) {
                    $html .= "</table>";
                }
                $fermeTable = true;
                $anneeTemp =  $value->getAnnee();
                $html .= "<h2>Année ".$value->getAnnee()."</h2>
                <table><tr><th>Mois</th><th>Nom chantier</th></tr>
                <tr><td>".$value->getMois()."</td><td>".$value->getClient()."</td></tr>";
                
            }else{
                $html .= "<tr><td>".$value->getMois()."</td><td>".$value->getClient()."</td></tr>";
            }
        }
        $html .= "</table>";
        return $html;
    }
}
