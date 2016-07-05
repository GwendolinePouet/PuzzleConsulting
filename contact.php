
<?php

$response = array(
    'status' => '',
    'message' => ''
);

if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])) {

    if(strlen($_POST['nom']) < 41 && strlen($_POST['email']) < 41 && strlen($_POST['message']) < 350) {

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $objet = filter_var($_POST['objet'], FILTER_SANITIZE_STRING);
            $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
            $userip = $_SERVER['REMOTE_ADDR'];

            require_once('php/config.php');

            $insert = $mysql->prepare("INSERT INTO `contact_form`(`userip`, `date`, `nom`, `email`, `objet`, `message`) VALUES (:userip, now(), :nom, :email, :objet, :message)");
            $insert->execute(array(
                ':userip'=>$userip,
                ':nom'=>$nom,
                ':email'=>$email,
                ':objet'=>$objet,
                ':message'=>$message
            ));
            if($insert)
            {
//                    require('php/user-mail-confirmation.php');
                   require('php/alert-mail-contact.php');
//                    confirm_candidature();
//                    alert_candidature($name_file);
                $response['status'] = 'success';
                $response['message']='Le formulaire a bien été envoyé ! ';
            }
            else
            {
                $response['message']='Désolé le service a rencontré un problème interne ! ';
            }

        }
        else
        {
            $response['message']='Veuillez renseigner une email valide !';
        }

    }
    else
    {
        $response['message']='Merci de ne pas tenter de nous spamer ! ';
    }

}
else
{
    $response['message']='Veuillez compléter tous les champs ! ';
}

echo json_encode($response);
header('Content-type: application/json');

?>