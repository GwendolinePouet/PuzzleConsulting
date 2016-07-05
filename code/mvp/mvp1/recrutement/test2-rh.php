<?php

require('php/config.php');

$title = "Espace de recrutement - Puzzle";
$moreJS = "<script src=\"assets/js/jquery.countdown360.js\"></script>
<script src=\"assets/js/custom.js\"></script>";


include('includes/header.php');
include('upload.php');
?>

<main class="clearfix staffing-page">
    <section class="entry full-section">
        <div class="clearfix staffing-test container">
            <h1>A vos marques, prets, partez !!!!</h1>
            <div id="time">10</div>

            <form class="testing-form" id="testing-form2" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <article class="part-1" style="display:block;">
                    <h2>Culture générale</h2>
                    <!-- Question 1-->
                    <div class="question-box-1">
                        <p>Qu'est que le Business Intelligence ?</p>
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
                <article>

            </form>

        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>
