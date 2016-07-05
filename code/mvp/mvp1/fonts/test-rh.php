<?php

require('php/config.php');

if(isset($_POST['submit']))
{

    if(!empty($_POST))
    {

        //declaration
        $userip = $_SERVER["REMOTE_ADDR"];
        $respq1 = $_POST['question1'];
        $respq2 = $_POST['question2'];
        $respq3 = $_POST['question3'];
        $respq4 = $_POST['question4'];
        $respq5 = $_POST['question5'];
        $respq6 = $_POST['question6'];
        $respq7 = $_POST['question7'];
        $respq8 = $_POST['question8'];
        $respq9 = $_POST['question9'];

        //insert table testing rh
        $insert = $mysql->prepare("INSERT INTO `test-testing1`(`date`, `userip`,`respq1`, `respq2`, `respq3`, `respq4`, `respq5`, `respq6`, `respq7`, `respq8`, `respq9`) VALUES(now(), :userip, :respq1, :respq2, :respq3, :respq4, :respq5, :respq6, :respq7, :respq8, :respq9)");
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
            ':respq9'=>$respq9

        ));
        //si insert ok, afficher message a l'utilisateur pour upload ok
        if($insert)
        {
            $message = 'Upload et insertion réussi !';
        }
        else
        {
            $message='Désolé le service a rencontré un problème interne ! ';
        }
    }
    else
    {
        $message = 'Veuillez remplir le formulaire correctement !';
    }
}


$title = "Espace de recrutement - Puzzle";
include('includes/header.php');

?>

<main class="clearfix staffing-page" xmlns="http://www.w3.org/1999/html">
    <section class="entry full-section">
        <div class="clearfix staffing-test container">
            <h1>A vos marques, prets, partez !!!!</h1>
            
            <div class="timer-container">
                <canvas id="timer-canvas" width="100" height="100"></canvas>
                <span id="timer">10</span>
            </div>
            
            <button  onclick="chrono.Start(10);">Click here</button>
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
                        <input class="next-btn" type="submit" name="submit" value="Envoyer">
                    </p>
                </article>

            </form>

        </div>
    </section>
</main>

<?php
$moreJS = true;
$jsPath = array("assets/js/easyPieChart.js");
include('includes/footer.php');

?>
