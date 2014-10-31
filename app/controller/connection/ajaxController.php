<?php
// On récupère les paramètreq transmis dans la table $_POST
// On traite ces valeurs en fonction de ce que l'on a à faire
$retour = array(
	"data1" => $_POST["login"],
	"data2" => $_POST["password"],
	"data3" => "Bonjour ".$_POST["login"].", bienvenu sur le site"	
);

// On encode le tableau de résultats pour rendre un flux json
// et l'envoyer à la vue souss forme de retour Ajax
echo json_encode($retour);