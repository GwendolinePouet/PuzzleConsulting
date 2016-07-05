<?php

require('php/config.php');
require_once('upload.php'); //Script d'envoi de formulaire

$moreJS = "<script src=\"assets/js/jquery.countdown360.js\"></script><script src=\"assets/js/custom.js\"></script>";
$title = "Espace de recrutement - Puzzle";


include('includes/header.php');
?>

<main class="clearfix staffing-page" xmlns="http://www.w3.org/1999/html">
    <section class="entry full-section">
        <article class="clearfix staffing-indications container ">
            <h1>Avant de commencer</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec odio quis eros posuere ullamcorper. Vivamus auctor placerat urna, eu imperdiet metus auctor quis. Ut lacinia a augue eu dignissim. Proin vestibulum ligula libero, nec malesuada dui vehicula in. Phasellus vitae tempor nisl. Morbi nibh nulla, semper quis imperdiet at, feugiat vel quam. Morbi sem mauris, viverra congue interdum eu, convallis et purus. Pellentesque dictum, turpis vitae interdum dapibus, dolor turpis consectetur metus, in viverra lorem nulla ac dui. Nulla odio ex, maximus ut nisl a, lobortis ullamcorper dolor. Sed ac ligula id orci porttitor dapibus vitae ut orci. Pellentesque a purus id nibh pulvinar laoreet. </p>
            <p> Nam accumsan dui sit amet velit sollicitudin dapibus. Praesent euismod elit sed velit vulputate, at facilisis diam imperdiet. In felis mauris, semper non pharetra vitae, molestie eu nisl. Aenean faucibus pretium porta. Duis vel faucibus ligula, non eleifend diam. Curabitur at neque sit amet magna volutpat porttitor. Duis tincidunt dolor tellus, pulvinar vestibulum turpis congue in. </p>
            <p>Phasellus venenatis erat id nisi malesuada, non faucibus lectus ultricies. In tincidunt, purus at lobortis ultricies, dolor mi porta lectus, a rutrum nisi nulla vel massa. Maecenas ut dignissim turpis.</p>
            <a href="#" class="start-btn  start-form" onclick="chrono.Start(10);">Commencer</a>
        </article>
        <div class="clearfix staffing-test container close">
            <h1>A vos marques, prets, partez !!!!</h1>
            
           <!-- <div class="timer-container">
                <span id="timer">10</span>
            </div>-->
            <div id="countdown"></div>

            <form class="testing-form" id="testing-form" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                <article class="part-1 active">
                    <h2>Culture data</h2>

                    <!-- Question 1-->
                    <div class="question-box-1">
                        <p>Qu'est que le Business Intelligence ?</p>
                        <ul>
                            <li>
                                <input type="radio" name="question1" value="1">
                                <label>Un logiciel qui gère les données d'une entreprise</label>
                            </li>
                            <li>
                                <input type="radio" name="question1" value="2">
                                <label>Un modèle économique basée sur l'analyse des donées</label>
                            </li>
                            <li>
                                <input type="radio" name="question1" value="3">
                                <label>Un ensemble de solution IT pour l'aide à la décision</label>
                            </li>
                            <li>
                                <input type="radio" name="question1" value="4">
                                <label>Une méthode de travail pour travailler plus vite</label>

                            </li>
                        </ul>

                    </div>

                    <!-- Question 2-->
                    <div class="question-box-2">
                        <p>Quelles sont les 4 phases du processus de Business Intelligence ?</p>
                        <ul>
                            <li>
                                <input type="radio" name="question2" value="1">
                                <label>Introduire - Segmenter - Traduire - Canaliser</label>

                            </li>
                            <li>
                                <input type="radio" name="question2" value="2">
                                <label>Visualiser - Centraliser - Disposer - Assembler</label>

                            </li>
                            <li>
                                <input type="radio" name="question2" value="3">
                                <label>Collecter - Stocker - Distribuer - Exploiter</label>
                            </li>
                            <li>
                                <input type="radio" name="question2" value="4">
                                <label>Approvisionner - Sélectionner - Optimiser - Matérialiser</label>
                            </li>
                        </ul>
                    </div>

                    <!-- Question 3-->
                    <div class="question-box-3">
                        <p>Que signifie l'acronyme OLAP ?</p>
                        <ul>
                            <li>
                                <input type="radio" name="question3" value="1">
                                <label> On Line Analytical Processing</label>

                            </li>
                            <li>
                                <input type="radio" name="question3" value="2">
                                <label>Outside Linear Analytics Production</label>

                            </li>
                            <li>
                                <input type="radio" name="question3" value="3">
                                <label>Offline Loop Analyses Process</label>

                            </li>
                            <li>
                                <input type="radio" name="question3" value="4">
                                <label>Origin Last Analytics Produced</label>

                            </li>
                        </ul>
                    </div>
                    <p class="next-btn-container">
                        <a href="#" class="next-btn">Suivant</a>
                    </p>
                </article>

                <article class="part-2">
                    <h2>Culture méthodo</h2>
                    <!-- Question 1-->
                    <div class="question-box-1">
                        <p>Qu'est que le Business Intelligence ?</p>
                        <ul>
                            <li>
                                <input type="radio" name="question4" value="1">
                                <label>Un logiciel qui gère les données d'une entreprise</label>

                            </li>
                            <li>
                                <input type="radio" name="question4" value="2">
                                <label>Un modèle économique basée sur l'analyse des donées</label>
                            </li>
                            <li>
                                <input type="radio" name="question4" value="3">
                                <label>Un ensemble de solution IT pour l'aide à la décision</label>
                            </li>
                            <li>
                                <input type="radio" name="question4" value="4">
                                <label>Une méthode de travail pour travailler plus vite</label>
                            </li>
                        </ul>
                    </div>

                    <!-- Question 2-->
                    <div class="question-box-2">
                        <p>Quelles sont les 4 phases du processus de Business Intelligence ?</p>
                        <ul>
                            <li>
                                <input type="radio" name="question5" value="1">
                                <label>Introduire - Segmenter - Traduire - Canaliser</label>

                            </li>
                            <li>
                                <input type="radio" name="question5" value="2">
                                <label>Visualiser - Centraliser - Disposer - Assembler</label>
                            </li>
                            <li>
                                <input type="radio" name="question5" value="3">
                                <label>Collecter - Stocker - Distribuer - Exploiter</label>
                            </li>
                            <li>
                                <input type="radio" name="question5" value="4">
                                <label>Approvisionner - Sélectionner - Optimiser - Matérialiser</label>
                            </li>
                        </ul>
                    </div>

                    <!-- Question 3-->
                    <div class="question-box-3">
                        <p>Que signifie l'acronyme OLAP ?</p>
                        <ul>
                            <li>
                                <input type="radio" name="question6" value="1">
                                <label> On Line Analytical Processing</label>
                            </li>
                            <li>
                                <input type="radio" name="question6" value="2">
                                <label>Outside Linear Analytics Production</label>
                            </li>
                            <li>
                                <input type="radio" name="question6" value="3">
                                <label>Offline Loop Analyses Process</label>
                            </li>
                            <li>
                                <input type="radio" name="question6" value="4">
                                <label>Origin Last Analytics Produced</label>
                            </li>
                        </ul>
                    </div>
                    <p class="next-btn-container">
                        <a href="#" class="next-btn">Suivant</a>
                    </p>
                </article>

                <article class="part-3 last-part">
                    <h2>Culture générale</h2>
                    <!-- Question 1-->
                    <div class="question-box-1">
                        <p>Qu'est que le Business Intelligence ?</p>
                        <ul>
                            <li>
                                <input type="radio" name="question7" value="1">
                                <label>Un logiciel qui gère les données d'une entreprise</label>
                            </li>
                            <li>
                                <input type="radio" name="question7" value="2">
                                <label>Un modèle économique basée sur l'analyse des donées</label>
                            </li>
                            <li>
                                <input type="radio" name="question7" value="3">
                                <label>Un ensemble de solution IT pour l'aide à la décision</label>
                            </li>
                            <li>
                                <input type="radio" name="question7" value="4">
                                <label>Une méthode de travail pour travailler plus vite</label>
                            </li>
                        </ul>
                    </div>

                    <!-- Question 2-->
                    <div class="question-box-2">
                        <p>Quelles sont les 4 phases du processus de Business Intelligence ?</p>
                        <ul>
                            <li>
                                <input type="radio" name="question8" value="1">
                                <label>Introduire - Segmenter - Traduire - Canaliser</label>
                            </li>
                            <li>
                                <input type="radio" name="question8" value="2">
                                <label>Visualiser - Centraliser - Disposer - Assembler</label>
                            </li>
                            <li>
                                <input type="radio" name="question8" value="3">
                                <label>Collecter - Stocker - Distribuer - Exploiter</label>
                            </li>
                            <li>
                                <input type="radio" name="question8" value="4">
                                <label>Approvisionner - Sélectionner - Optimiser - Matérialiser</label>
                            </li>
                        </ul>
                    </div>

                    <!-- Question 3-->
                    <div class="question-box-3">
                        <p>Que signifie l'acronyme OLAP ?</p>
                        <ul>
                            <li>
                                <input type="radio" name="question9" value="1">
                                <label> On Line Analytical Processing</label>
                            </li>
                            <li>
                                <input type="radio" name="question9" value="2">
                                <label>Outside Linear Analytics Production</label>
                            </li>
                            <li>
                                <input type="radio" name="question9" value="3">
                                <label>Offline Loop Analyses Process</label>
                            </li>
                            <li>
                                <input type="radio" name="question9" value="4">
                                <label>Origin Last Analytics Produced</label>
                            </li>
                        </ul>
                    </div>
                    <p class="next-btn-container">
                        <a href="#" class="next-btn">Suivant</a>
                    </p>
                </article>
                <article class="part-4">
                    <h2>Infomrations personnelles</h2>
                    <!-- Question 1-->
                    <div class="question-box-1">
                        <p>Dernière étape pour la candidature</p>
                        <ul>
                            <li>
                                <input type="text" name="firstname" placeholder="Prénom" required>
                                <input type="text" name="name" placeholder="Nom" required><br>
                                <input type="email" name="email" placeholder="Email" required>
                            </li>

                            <li>
                                <label>Uploader votre CV ici</label>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <p>Ou lien du profil Linkedin : <input type="text" name="linkedinUrl" placeholder="Lien Linkedin"></p>
                            </li>
                        </ul>
                    </div>
                    <p class="next-btn-container">
                        <input class="next-btn" type="submit" name="submit" value="Envoyer">
                    </p>
                    <p><?php echo $messageInfo ?></p>
                </article>

            </form>

        </div>
    </section>
</main>

<?php

include('includes/footer.php');

?>
