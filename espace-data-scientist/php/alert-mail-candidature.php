<?php
function alert_candidature($filename) {
    
    $date = date('d/m/Y');
    $time = date('H:i:s');
    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $linkedinUrl = $_POST['linkedinUrl'];
    $linkCV = $filename;

    $mail = 'contact@puzzle-consulting.fr'; // Déclaration de l'adresse de destination.
    $ipaddress = $_SERVER['REMOTE_ADDR'];

    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
    {
        $passage_ligne = "\r\n";
    }
    else
    {
        $passage_ligne = "\n";
    }
    //=====Déclaration des messages au format texte et au format HTML.
    $message_txt = "Bonjour, nous vous confirmons que votre demande de candidature chez Puzzle a bien été prise en compte. Nous vous recontacterons dans de bref délais pour la suite de l'aventure. Bien à vous, l'équipe Puzzle.";
    $message_html = "
    
    <html>
        <head>
        <title>Demande de candidature</title>
        </head>
        <body>
            <p><strong>Bonjour,</strong><br><br>
            Une personne a candidaté sur le site puzzle-consulting.fr le {$date} à {$time}</p>
            <p>Voici ses informations :</p>
            <ul>
             <li><strong>Date: {$date}</strong></li>
                <li><strong>Prénom&nbsp;: {$firstname}</strong></li>
                <li><strong>Nom&nbsp;: {$name}</strong></li>
                <li><strong>Email&nbsp;: {$email}</strong></li>
                <li><strong>Lien Linkedin&nbsp;: {$linkedinUrl}</strong></li>
                <li><strong>Lien CV&nbsp;: http://puzzle-consulting.fr/recrutement/uploads/cv/{$linkCV}</strong></li>
                <li><strong>Adresse IP&nbsp;: {$ipaddress}</strong></li>          
            </ul>
             <p>Cordialement.</p>
         </body>
     </html>";
    //==========
    

    //=====Création de la boundary.
    $boundary = "-----=".md5(rand());
    $boundary_alt = "-----=".md5(rand());
    //==========

    //=====Définition du sujet.
    $sujet = "Demande de candidature sur puzzle-consulting.fr";
    //=========

    //=====Création du header de l'e-mail.
    $header = "From: \"Puzzle Recrutement\"<recrutement@puzzle-consulting.fr>".$passage_ligne;
    $header.= "Reply-to: \"Puzzle Recrutemen\" <recrutement@puzzle-consulting.fr>".$passage_ligne;
    $header.= "MIME-Version: 1.0".$passage_ligne;
    $header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    //==========

    //=====Création du message.
    $message = $passage_ligne."--".$boundary.$passage_ligne;
    $message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
    $message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
    //=====Ajout du message au format texte.
    $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_txt.$passage_ligne;
    //==========

    $message.= $passage_ligne."--".$boundary_alt.$passage_ligne;

    //=====Ajout du message au format HTML.
    $message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_html.$passage_ligne;
    //==========

    //=====On ferme la boundary alternative.
    $message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
    //==========



    $message.= $passage_ligne."--".$boundary.$passage_ligne;

    //=====Envoi de l'e-mail.
    mail($mail,$sujet,$message,$header);
    return;

//==========
}
?>