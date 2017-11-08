<?php

function test1(&$z)
{
   $z = $z . " avec un suffixe";
}

$x = "origine";
test1($x);
echo $x;


class Personne{
    public $nom = "jean"; 
}
$jp = new Personne();
var_dump($jp);
function prenom($personne, $prenom){
    $personne->prenom = $prenom;
}
prenom($jp,"paul");
var_dump($jp);


c <- a
a <- b 
b <- c 
