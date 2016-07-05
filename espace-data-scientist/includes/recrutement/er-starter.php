<form class="staffing-form" id="staffing-form" enctype="multipart/form-data" action="upload.php" method="post">
    <div class="er-screen-1">
        <article class="er-indication txt-content-style">
            <h1>Êtes-vous prêts à vous lancer dans l'aventure Puzzle ?</h1>
            <p>Vous êtes passionés et à soif de défis ? Les mathématiques appliquées, les statistiques prédictives, les langages de programmation et les architectures de données sont vos fidèles alliés ? Vous comprenez les problématiques financières, commerciales, marketing et de RH ?</p>
            <p>Si oui, alors vous méritez une place dans l'équipe Puzzle. N'attendez plus et postulez directement ici !</p>
            <p class="warning">Afin d'avoir une visualisation rapide de votre profil et vos compétences, vous devrez répondre à un QCM minuté (20s/question) pour valider l'envoi de votre candidature.</p>
        </article>
        <div class="er-infos-form">
            <ul>
                <li>
                    <div class="input-field input-firstname">
                        <input id="Firstname" type="text" name="firstname">
                        <label for="firstname" class="label-field">Prénom</label>
                    </div>
                </li>
                <li>
                    <div class="input-field input-name">
                        <input id="Name" type="text" name="name">
                        <label for="name" class="label-field">Nom</label>
                    </div>
                </li>

                <li>
                    <div class="input-field input-email">
                        <input id="Email" type="email" name="email">
                        <label for="" class="label-field">Email</label>
                    </div>
                </li>
                <li>
                    <div class="input-field input-tel">
                        <input type="tel" name="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
                        <label for="tel" class="label-field">Téléphone</label>
                    </div>
                </li>
                <li>
                    <p class="infos"><strong>Téléchargez votre CV et/ou renseignez votre page Linkedin</strong></p>
                    <div class="input-field input-file">
                        <input id="File" type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <span>Le fichier ne doit pas dépasser 2 Mo et doit être de la forme .pdf, .doc ou .docx</span>
                </li>
                <li>
                    <div class="input-field  input-url">
                        <input id="Linkedin" type="url"  name="linkedinUrl" name="website">
                        <label for="linkedinUrl" class="label-field">Lien Linkedin</label>
                    </div>
                </li>
            </ul>
            <p class="start-btn-container">
                <input id="submit" class="btn-page btn-start" type="submit" name="submit" value="Envoyer">
                <p class="alert-message"><?php echo $messageInfo;?></p>
            </p>

        </div>
    </div>
</form>