<?php
if( ! empty($_POST) ){
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('d/m/Y');
	$time = date('H:i:s');
	$societe = $_POST['societe'];
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$sujet = 'Message dété scientist';

	$headers = "From: {$nom} {$prenom} <{$email}>" . "\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	$emailbody = "<p>Vous avez obtenu un nouvel utilisateur provenant de la landing page Flamingos</p>
				  <p><strong>Nom : </strong> {$prenom} {$nom} </p>
				  <p><strong>Adresse email : </strong> {$email} </p>
				  <p>Ce message a été envoyé depuis l'adresse IP : {$ipaddress} le {$date} à {$time}</p>";
	
	mail("agence.flamingos@gmail.com","{$sujet}",$emailbody,$headers);

	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
		header('location: ' . $_SERVER['HTTP_REFERER']);
	}
}