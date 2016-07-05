
<?php

$response = array(
    'status' => '',
    'message' => ''
);


    require_once('php/config.php');

    $userid = htmlentities($_POST['userid']);
    $respq1 = htmlentities($_POST['question1']); //Réponse à la question 1
    $respq2 = htmlentities($_POST['question2']); //Réponse à la question 2
    $respq3 = htmlentities($_POST['question3']); //Réponse à la question 3
    $respq4 = htmlentities($_POST['question4']); //Réponse à la question 4
    $respq5 = htmlentities($_POST['question5']); //Réponse à la question 5
    $respq6 = htmlentities($_POST['question6']); //Réponse à la question 6
    $respq7 = htmlentities($_POST['question7']); //Réponse à la question 7
    $respq8 = htmlentities($_POST['question8']); //Réponse à la question 8
    $respq9 = htmlentities($_POST['question9']); //Réponse à la question 9
    $respq10 = htmlentities($_POST['question10']); //Réponse à la question 10
    $respq11 = htmlentities($_POST['question11']); //Réponse à la question 11
    $respq12 = htmlentities($_POST['question12']); //Réponse à la question 12

    $response['message'] = $respq1;

    $update = $mysql->prepare("UPDATE `test3-testing` SET respq1 = :respq1, respq2 = :respq2, respq3 = :respq3, respq4 = :respq4, respq5 = :respq5, respq6 = :respq6, respq7 = :respq7, respq8 = :respq8, respq9 = :respq9, respq10 = :respq10, respq11 = :respq11, respq12 = :respq12 WHERE userid = :userid");
    $update->execute(array(
        ':userid'=>$userid,
        ':respq1'=>$respq1,
        ':respq2'=>$respq2,
        ':respq3'=>$respq3,
        ':respq4'=>$respq4,
        ':respq5'=>$respq5,
        ':respq6'=>$respq6,
        ':respq7'=>$respq7,
        ':respq8'=>$respq8,
        ':respq9'=>$respq9,
        ':respq10'=>$respq10,
        ':respq11'=>$respq11,
        ':respq12'=>$respq12
    ));

    if($update)
    {
//                    require('php/user-mail-confirmation.php');
//                   require('php/alert-mail-candidature.php');
//                    confirm_candidature();
//                    alert_candidature($name_file);
        $response['status'] = 'success';
        $response['message'] = 'Vos informations ont bien été enregistrées !';
    }
    else
    {
        $response['message']='Désolé le service a rencontré un problème interne ! ';
    }


    echo json_encode($response);
    header('Content-type: application/json');

?>
