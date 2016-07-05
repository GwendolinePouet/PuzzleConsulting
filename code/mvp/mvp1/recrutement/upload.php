
<?php


// Définition des constantes et variables
//======================================================

// Constantes
define('TARGET', 'uploads/cv/'); // Repertoire cible       $target_dir = "uploads/cv/";
define('MAX_SIZE', 2000000);    // Taille max en octets du fichier

// Tableaux de donnees
$tabExt = array('pdf','doc','docx'); // Extensions autorisées

// Variables

$type_file = '';
$name_file = '';
$target_file = '';

$uploadOk = '';
$messageInfo = '';


// Création du répertoire cible si inexistant
//======================================================
if( !is_dir(TARGET) ) {
    if( !mkdir(TARGET, 0755) ) {
        exit('Erreur : le répertoire cible ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le manuellement !');
    }
}



// Script d'upload
//======================================================
if(isset($_POST["submit"])) {

    $target_file = TARGET . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 0;
    $type_file = pathinfo($target_file,PATHINFO_EXTENSION);

    //On test si le champ file est bien rempli
    if( !empty($_FILES['fileToUpload']['name']) ) {

        // On verifie l'extension du fichier
        if(in_array(strtolower($type_file),$tabExt)) {

            //On vérifie la taille du fichier
            if ($_FILES["fileToUpload"]["size"] < MAX_SIZE) {

                //On parcours le tableau d'erreur
                if(isset($_FILES['fileToUpload']['error']) && UPLOAD_ERR_OK === $_FILES['fileToUpload']['error']) {
    
                    // On renomme le fichier
                    $name_file = md5(uniqid()) .'.'. $type_file;
    
                    // Si c'est OK, on teste l'upload
                    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], TARGET.$name_file)){
                        $messageInfo = 'Upload réussi !';

                    }
                    else
                    {
                        $messageInfo = 'Veuillez nous excuser il y a eu un problème lors de l\'upload !';
                    }
    
                }
                else
                {
                    $messageInfo = 'Une erreur interne a empêché l\'uplaod de l\'image, veuillez essayer ulterieurement';
                }
            }
            else {
                
                $messageInfo = "La taille du fichier est trop grande, nous acceptons les fichiers jusqu'a 2 Mo.";
            }
        }
        else
        {
            $messageInfo = 'L\'extension du fichier est incorrecte, nous acceptons que les fichiers .pdf, .doc et .docx !';
        }
    }


    // Enregistrement en BDD
    //======================================================

    //Déclariation des variables pour la requete MySql et on sécurise les variables du $_POST
    $userip = $_SERVER["REMOTE_ADDR"];
    $respq1 = $_POST['question1']; //Réponse à la question 1
    $respq2 = $_POST['question2']; //Réponse à la question 2
    $respq3 = $_POST['question3']; //Réponse à la question 3
    $respq4 = $_POST['question4']; //Réponse à la question 4
    $respq5 = $_POST['question5']; //Réponse à la question 5
    $respq6 = $_POST['question6']; //Réponse à la question 6
    $respq7 = $_POST['question7']; //Réponse à la question 7
    $respq8 = $_POST['question8']; //Réponse à la question 8
    $respq9 = $_POST['question9']; //Réponse à la question 9
    $firstname = htmlspecialchars($_POST['firstname']); // Prénom
    $name = htmlspecialchars($_POST['name']);  // Nom de famille
    $email = htmlspecialchars($_POST['email']); //Email
    $linkedinUrl = htmlspecialchars($_POST['linkedinUrl']); //Lien vers profil Linkedin
    $cvUrl = $name_file; //Nom du fichier

    //On vérifie que le champ email ne soit pas vide et qu'il est au moins le CV d'uploader ou le lien Linkedin
    if(!empty($email) && (!empty($linkedinUrl) || !empty($_FILES['fileToUpload']['name']))){

        $insert = $mysql->prepare("INSERT INTO `test3-testing`(`date`, `userip`, `respq1`, `respq2`, `respq3`, `respq4`, `respq5`, `respq6`, `respq7`, `respq8`, `respq9`, `firstname`, `name`, `email`, `linkedinUrl`, `cvUrl`) VALUES (now(), :userip, :respq1, :respq2, :respq3, :respq4, :respq5, :respq6, :respq7, :respq8, :respq9, :firstname, :name, :email, :linkedinUrl, :cvUrl)");
        $insert->execute(array(
            ':userip'=>$userip,
            ':respq1'=>$respq1,
            ':respq2'=>$respq2,
            ':respq3'=>$respq3,
            ':respq4'=>$respq4,
            ':respq5'=>$respq5,
            ':respq6'=>$respq6,
            ':respq7'=>$respq7,
            ':respq8'=>$respq8,
            ':respq9'=>$respq9,
            ':firstname'=>$firstname,
            ':name'=>$name,
            ':email'=>$email,
            ':linkedinUrl'=>$linkedinUrl,
            ':cvUrl'=>$cvUrl
        ));

        //si insert ok, on affiche le message a l'utilisateur pour upload ok
        if($insert)
        {
            $messageInfo = 'Merci pour le temps que vous nous avez consacré, votre demande de candidature a bien été enregistrée.<br>Vous allez recevoir dans peu de temps un mail de confirmation à l\'adresse :'.$email;
            require('php/user-mail-confirmation.php');
            require('php/alert-mail-candidature.php');
            confirm_candidature();
            alert_candidature($name_file);
        }
        else
        {
            $messageInfo='Désolé le service a rencontré un problème interne ! ';
        }
    }
    else
    {
        $messageInfo='Veuillez renseigner votre email ainsi que le lien vers votre profil Linkedin ou uploader votre CV ! ';
    }
}


?>

