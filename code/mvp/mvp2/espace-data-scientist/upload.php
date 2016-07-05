
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
$file_upload = false;
$linkedin_upload = false;

$uploadOk = '';
$messageFileInfo = '';
$response = array(
    'status' => '',
    'userid' => '',
    'message' => ''
);

// Création du répertoire cible si inexistant
//======================================================
if( !is_dir(TARGET) ) {
    if( !mkdir(TARGET, 0755) ) {
        exit('Erreur : le répertoire cible ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le manuellement !');
    }
}



// Script d'upload
//======================================================


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

                    $file_upload = true;

                }
                else
                {
                    $messageFileInfo = 'Veuillez nous excuser il y a eu un problème lors de l\'upload !';
                }

            }
            else
            {
                $messageFileInfo = 'Une erreur interne a empêché l\'uplaod de l\'image, veuillez essayer ulterieurement';
            }
        }
        else {

            $messageFileInfo = "La taille du fichier est trop grande, nous acceptons les fichiers jusqu'a 2 Mo.";
        }
    }
    else
    {
        $messageFileInfo = 'L\'extension du fichier est incorrecte, nous acceptons que les fichiers .pdf, .doc et .docx !';
    }
}

    if ($messageFileInfo == '') {

        // Enregistrement en BDD
        //======================================================

        //Déclariation des variables pour la requete MySql et on sécurise les variables du $_POST
        $userip = $_SERVER["REMOTE_ADDR"];
        $firstname = htmlentities($_POST['firstname']); // Prénom
        $name = htmlentities($_POST['name']);  // Nom de famille
        $email = htmlentities($_POST['email']); //Email
        $linkedinUrl = htmlentities($_POST['linkedinUrl']); //Lien vers profil Linkedin
        $cvUrl = $name_file; //Nom du fichier

        //On test le champ du lien Linkedin
        if(!empty($linkedinUrl)) {
            $linkedin_upload = true;
        }
        //On vérifie que le champ email ne soit pas vide et qu'il est au moins le CV d'uploader ou le lien Linkedin
        if(!empty($email)) {

            if(($linkedin_upload == true) || ($file_upload == true)){

                require('php/config.php');

                $insert = $mysql->prepare("INSERT INTO `test3-testing`(`date`, `userip`, `firstname`, `name`, `email`, `linkedinUrl`, `cvUrl`) VALUES (now(), :userip, :firstname, :name, :email, :linkedinUrl, :cvUrl)");
                $insert->execute(array(
                    ':userip'=>$userip,
                    ':firstname'=>$firstname,
                    ':name'=>$name,
                    ':email'=>$email,
                    ':linkedinUrl'=>$linkedinUrl,
                    ':cvUrl'=>$cvUrl
                ));

                $id = $mysql->lastInsertId();

                //si insert ok, on affiche le message a l'utilisateur pour upload ok
                if($insert)
                {
                    $response['message'] = 'Vos informations ont bien été enregistrées !';

//                    require('php/user-mail-confirmation.php');
//                    require('php/alert-mail-candidature.php');
//                    confirm_candidature();
//                    alert_candidature($name_file);
                    $response['status'] = 'success';
                    $response['userid'] = $id;
                }
                else
                {
                    $response['message']='Désolé le service a rencontré un problème interne ! ';

                }
            }
            else
            {
                $response['message']='Veuillez renseigner le lien vers votre profil Linkedin ou uploader votre CV ! ';
            }
        }
        else
        {
            $response['message']='Veuillez renseigner votre email! ';
        }
    }
    else
    {
        $response['message'] = $messageFileInfo;
    }




echo json_encode($response);
header('Content-type: application/json');

?>
