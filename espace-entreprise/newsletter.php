
<?php

$response = array(
    'status' => '',
    'message' => ''
);
$email = $_POST['email'];

if(!empty($email)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $email = htmlentities($email);

        require_once('php/config.php');

        $reponse = $mysql->prepare("SELECT email FROM newsletter WHERE email = :email");
        $reponse->execute(array(':email'=>$email));

        if($reponse->rowCount()==0) {

            $insert = $mysql->prepare("INSERT INTO `newsletter`(`date`, `email`) VALUES (now(), :email)");
            $insert->execute(array(
                ':email'=>$email
            ));
            if($insert)
            {
//                    require('php/user-mail-confirmation.php');
//                   require('php/alert-mail-candidature.php');
//                    confirm_candidature();
//                    alert_candidature($name_file);
                $response['status'] = 'success';
            }
            else
            {
                $response['message']='Désolé le service a rencontré un problème interne ! ';
            }
        }
        else
        {
            $response['message']='Désolé cette email a déja été enregistrée !';
        }
        
    }
    else
    {
        $response['message']='Désolé cette email n\'est pas valide ! ';
    }
}
else
{
    $response['message']='Veuillez compléter le champ ! ';
}

echo json_encode($response);
header('Content-type: application/json');

?>
