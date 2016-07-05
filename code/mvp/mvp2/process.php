<?php
if( ! empty($_POST) ){
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y');
    $time = date('H:i:s');
    $societe = $_POST['societe'];
    $nom = $_POST['nom'];
    $email = $_POST['email_contact'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    $headers = "From: {$nom} {$prenom} <{$email}>" . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $emailbody = "<p>Vous avez obtenu reçu un message provenant de la page d'accueil puzzle-consulting.fr (formulaire laissez-nous un petit mot)</p>
				  <p><strong>Nom : </strong> $nom} </p>
				  <p><strong>Adresse email : </strong> {$email} </p>
				  <p><strong>Sujet : </strong> {$sujet} </p>
				  <p><strong>Message : </strong> {$message} </p>
				  <p>Ce message a été envoyé depuis l'adresse IP : {$ipaddress} le {$date} à {$time}</p>";

    mail("agence.flamingos@gmail.com","{$sujet}",$emailbody,$headers);

    if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
}