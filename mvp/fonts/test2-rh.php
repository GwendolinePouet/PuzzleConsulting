<?php

require('php/config.php');


$title = "Espace de recrutement - Puzzle";
include('includes/header.php');

?>

<main class="clearfix staffing-page">
    <section class="entry full-section">
        <div class="clearfix staffing-test container">
            <h1>A vos marques, prets, partez !!!!</h1>
            <div id="time">10</div>
            <form class="testing-form" id="testing-form" enctype="multipart/form-data" action="" method="post">

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
                        <input class="next-btn" type="submit" name="submit" value="Suivant"onclick="chrono.Start(10);">
                    </p>
                </article>
                </form>

            <form class="testing-form" id="testing-form2" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <article class="part-2">
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

<?php include('includes/footer.php'); ?>
<script src="assets/testing-form.js"></script>
<script>
    $('document').ready(function () {

        $("#testing-form").submit(function(){
            respq1 = $(this).find("input[name=question1]").val();
            respq2 = $(this).find("input[name=question2]").val();
            respq3 = $(this).find("input[name=question3]").val();

            $.post("php/testing-form.php",{respq1: respq1, respq2: respq2, respq3: respq3}, function(data){
                alert(data);
            });
            return false;
        });

    });
</script>